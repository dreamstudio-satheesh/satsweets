<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class Shop extends Component
{
    public $products;
 
    public function cart($id)
    {
       
       
        if ($id) {
            $product = Product::where('id',$id)->first();

            $userId = auth()->user()->id; // or any string represents user identifier
            Cart::add([
                'id' =>$product->id, // inique row ID
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => array()
            ]);

            $this->dispatchBrowserEvent('alert',
            ['type' => 'success',  'message' => 'Item added Successfully!']);
           
        }
        
        // \Cart::add($id);

        session()->flash('success', 'Item has added to cart !');
    }
 
    public function render()
    {
        return view('livewire.shop');
    }
}
