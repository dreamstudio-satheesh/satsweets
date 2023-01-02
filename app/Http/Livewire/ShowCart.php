<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class ShowCart extends Component
{
    public $barcode = '';

    public $cartlist=[];

    public function mount()
    {
        
    }

    public function addcart()
    {
        $product = Product::where('code',$this->barcode)->first();
        if ($product) {

          /*   if (array_key_exists($this->barcode,$this->cartlist))
            {
               
            } */
             $list[$product->code]=(object) array(
                'code' =>$product->code, // inique row ID
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,);
               
               array_push($this->cartlist,$list);
            
          
        }

        $this->barcode='';

    }

    
    public function render()
    {
        return view('livewire.show-cart');
    }
}
