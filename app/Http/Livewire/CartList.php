<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CartList extends Component
{
    
    public $cartlist= array( );

    protected $listeners = ['cartAdded' => 'cart'];

    public function addcart($code)
    {
        $this->cartlist[$code]['quantity']++;
    }

    public function removecart($code)
    {
        # code...
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
                            'price' => $product->price,
                            'url' => $product->getFirstMediaUrl('products'),
                            'gstamount' =>round($product->price-($product->price *100/(100+$product->gst))),
                            'gst' => $product->gst,
                            'quantity' => 1,                      
                        );
            }

           
        }
        
    }
    
    public function render()
    {
        return view('livewire.cart-list');
    }
}
