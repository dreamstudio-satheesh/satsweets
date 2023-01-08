<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Customer;
use App\Traits\Invoices;

class CartList extends Component
{
    use Invoices; 
    public $checkout = false;
    public $total_count= 0;

    public $customers;


    public $cartlist= array();

    public $sub_total= 0;

    public $taxamount= 0;

    public $total= 0;

    public $customer_id='';

    public $invoice_date = '';


    protected $listeners = ['cartAdded' => 'cart'];


    public function mount()
    {
        $this->customers = Customer::select('id','name')->get();

        
    }

    public function updated($name, $value)
    {      
        if (strpos($name, '.')) {
            $code= explode('.',$name)[1];  
            if ($name && is_numeric($code)) { $this->updatecart($code); }
        }

        if (!empty($this->cartlist) && !empty($this->customer_id) && !empty($this->invoice_date)) {          
            $this->checkout = true;
        }
        else{  $this->checkout = false;}

    }

    public function addcart($code)
    {
        $this->cartlist[$code]['quantity']++;
        $this->updatecart($code); 
    }


    public function updatecart($code=null)
    {       
        if ($code) {
            $this->cartlist[$code]['total']=((int)$this->cartlist[$code]['price'])*((int)$this->cartlist[$code]['quantity']);
        }
        $this->total_count= count($this->cartlist);

        $totalnum=0;
        $taxamount=0;

        foreach ($this->cartlist  as $item) {
            $totalnum +=(int) $item['total'];
            $taxamount=((int)$taxamount+$item['gstamount']) *((int)$item['quantity']);
        }

        $this->total= $totalnum;
        $this->taxamount= $taxamount;
        $this->sub_total= $totalnum-$taxamount;
    }

    public function removecart($code)
    {
        if ($this->cartlist[$code]['quantity'] > 1) {

            $this->cartlist[$code]['quantity']--;           
        }
        
        $this->updatecart($code);
    }

    public function clear_cart()
    {
       $this->cartlist= array();
       $this->updatecart();
    }

    public function delete_cart($code)
    {
       unset($this->cartlist[$code]);
       $this->updatecart();
    }

    public function checkout()
    {
        if (!empty($this->cartlist) && !empty($this->customer_id) && !empty($this->invoice_date)) {
          
         $this->create_invoice([
                'cartlist' =>  $this->cartlist,
                'customer_id' => $this->customer_id,
                'invoice_date' => $this->invoice_date,
                'total' => $this->total,
                'sub_total' => $this->sub_total,
                'taxamount' => $this->taxamount,
            ]);
        }
    }

    public function cart($code)
    {
        if (array_key_exists("$code",$this->cartlist)) 
        { 
            $this->addcart($code);                   
           
        }else{               
            
            $product = Product::where('code',$code)->first();        
            if ($product) {
                $this->cartlist[$product->code]= array(
                            'code' => $product->code, // inique row ID
                            'name' => $product->name,
                            'price' => (int)$product->price,
                            'url' => $product->getMedia('products')->first()->getUrl('thumb'),
                            'gstamount' =>round($product->price-($product->price *100/(100+$product->gst))),
                            'gst' => $product->gst,
                            'quantity' => 1, 
                            'total' => $product->price,                     
                        );
                $this->updatecart();        
            }

           
        }
        
    }
    
    public function render()
    {
        return view('livewire.cart-list');
    }
}
