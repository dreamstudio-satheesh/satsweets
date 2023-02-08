<?php

namespace App\Http\Livewire;

use App\Models\Line;
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
        if(auth()->user()->hasRole('user') && auth()->user()->user_line_id){
                      
            $this->customers = Customer::where('line_id', auth()->user()->user_line_id)->get();
            
        }elseif(auth()->user()->hasRole('user') && auth()->user()->line_id){

            $lines=Line::where('line', auth()->user()->line_id )->select('id')->get()->toArray();            
            $this->customers = Customer::whereIn('line_id',$lines)->get();
            
        }else{
            $this->customers = Customer::all();
        }

        
    }

    public function updated($name, $value)
    {      
        if (strpos($name, '.')) {
            $id= explode('.',$name)[1];  
            if ($name && is_numeric($id)) { $this->updatecart($id); }
        }

        if (!empty($this->cartlist) && !empty($this->customer_id) && !empty($this->invoice_date)) {          
            $this->checkout = true;
        }
        else{  $this->checkout = false;}

    }

    public function addcart($id)
    {
        $this->emit('playAudio');
        $this->cartlist[$id]['quantity']++;
        $this->updatecart($id); 
    }


    public function updatecart($id=null)
    {       
        if ($id) {
            $this->cartlist[$id]['total']=((int)$this->cartlist[$id]['price'])*((int)$this->cartlist[$id]['quantity']);
        }
        $this->total_count= count($this->cartlist);

        $totalnum=0;
        $taxamount=0;

        foreach ($this->cartlist  as $item) {
            $totalnum +=(int) $item['total'];
            $taxamount+=$item['gstamount'] *$item['quantity'];
        }
        

        $this->total= $totalnum;
        $this->taxamount= $taxamount;
        $this->sub_total= $totalnum-$taxamount;
    }

    public function removecart($id)
    {
        $this->emit('playAudio');
        if ($this->cartlist[$id]['quantity'] > 1) {

            $this->cartlist[$id]['quantity']--;           
        }
        
        $this->updatecart($id);
    }

    public function clear_cart()
    {
       $this->cartlist= array();
       $this->updatecart();
    }

    public function delete_cart($id)
    {
       unset($this->cartlist[$id]);
       $this->updatecart();
    }

    public function checkout()
    {
        if (!empty($this->cartlist) && !empty($this->customer_id) && !empty($this->invoice_date)) {
          
         $this->create_invoice([
                'items' =>  $this->cartlist,
                'customer_id' => $this->customer_id,
                'invoice_date' => $this->invoice_date,
                'total' => $this->total,
                'sub_total' => $this->sub_total,
                'taxamount' => $this->taxamount,
                
            ]);
        }
    }

    public function cart($id)
    { 
       
        $this->emit('playAudio');

        if (array_key_exists("$id",$this->cartlist)) 
        { 
            $this->addcart($id);                   
           
        }else{               
            
            $product = Product::where('id',$id)->first();        
            if ($product) {
                $media='';
                if (!empty($product->getMedia('products')->first())) {
                    $media=$product->getMedia('products')->first()->getUrl('thumb');
                }
                $this->cartlist[$product->id]= array(
                            'id' => $product->id,
                            'code' => $product->code, // inique row ID
                            'name' => $product->name,
                            'price' => (int)$product->price,
                            'url' => '',
                            //$total  * ((100 + TAX PERCENT) / 100)
                            'gstamount' =>round($product->price *((100+$product->gst)/100),2)-$product->price ,
                            'gst' => $product->gst,
                            'hsncode' => $product->hsncode,
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
