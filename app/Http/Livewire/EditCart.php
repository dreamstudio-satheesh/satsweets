<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class EditCart extends Component
{
    public $barcode = '';

    public $invoice;

    public $cartlist= array( );

 

    protected $rules = [
      'cartlist.*.quantity' => 'required|string|min:1',
      'cartlist.*.price' => 'required|string|min:1',
  ];



    public function mount()
    {
      foreach ($this->invoice->invoice_items as  $item) {

        $this->cartlist[$item->product_code] = array(
          'code' => $item->product_code, // inique row ID
          'name' => $item->name,
          'price' => $item->price,
          'gstamount' => $item->gstamount,
          'gst' => $item->gst,
          'quantity' => $item->quantity,
          'total' => $item->total,                        
          'product_id' => $item->product_id,                        
          'invoice_id' => $item->invoice_id,                        
        );
       
      }
        
    }

    public function updating($name, $value)
    {
      if (empty($value)) {
        $this->validate();
        dd($value);
        
      }
    }
    

    public function updated($name, $value)
    {
     
      if ($name !='barcode' && preg_match('/^[0-9]*$/', $value)) {        

        $arraykey= explode('.',$name)[1];
        $unitname= explode('.',$name)[2];

        if (array_key_exists($arraykey,$this->cartlist)) 
        { 
          //dd($name);
          $total= $this->cartlist[$arraykey]['total']; 
          $price=$this->cartlist[$arraykey]['price'];
          $gst=$this->cartlist[$arraykey]['gst'];
          $this->cartlist[$arraykey]['gstamount']=round($price-( $price *100/(100+$gst)),2);  
          if ($unitname =='quantity') {
                $this->cartlist[$arraykey]['total']= $price* (int)$value;                              
              }
              elseif ($unitname =='price') {                
                $this->cartlist[$arraykey]['total']=$this->cartlist[$arraykey]['quantity']* (int)$value;                
              }
        }
        
      } 
      
    }

    public function addcart()
    {
        $product = Product::where('code',$this->barcode)->first();
        if ($product) {

          /*   if (array_key_exists($this->barcode,$this->cartlist))
            {
               
            } */
            $this->cartlist[$product->code] = array(
                        'product_id' => $product->id, 
                        'invoice_id' => $this->invoice->id, 
                        'code' => $product->code, 
                        'name' => $product->name,
                        'price' => $product->price,
                        'gstamount' =>round($product->price-($product->price *100/(100+$product->gst))),
                        'gst' => $product->gst,
                        'quantity' => 1,
                        'total' => $product->price,                        
                      );
               
              
            
          //dd($this->cartlist);
        }

        $this->barcode='';

    }

    
    public function render()
    {
        return view('livewire.edit-cart');
    }
}