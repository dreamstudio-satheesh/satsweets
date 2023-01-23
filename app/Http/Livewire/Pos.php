<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Pos extends Component
{
   public $categories;

   public $products;
   
 
    public function category($id)
    {
        $this->products = Product::where('category_id', $id)->get();
    }

   
    public function render()
    {
        $this->products = Product::where('category_id', '1')->get();
        return view('livewire.pos');
    }
}
