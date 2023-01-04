<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class ShowCart extends Component
{
    public $barcode = '';

    public $cartlist= array( );

    public function mount()
    {
        
    }

    public function updated($name, $value)
    {
      //dd($name);
      
      if ($name !='barcode') {

        $arraykey= explode('.',$name)[1];
        $unitname= explode('.',$name)[2];

        if (array_key_exists($arraykey,$this->cartlist)) 
        { 
              
          $total= $this->cartlist[$arraykey]['total']; 
          $price=$this->cartlist[$arraykey]['price'];
          $gst=$this->cartlist[$arraykey]['gst'];
          $this->cartlist[$arraykey]['gstamount']=round( $price-( $price *100/(100+$gst)));  
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
                        'code' => $product->code, // inique row ID
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
        return view('livewire.show-cart');
    }
}
