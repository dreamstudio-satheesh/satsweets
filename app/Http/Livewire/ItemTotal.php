<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ItemTotal extends Component
{
    
    public $itemtotal;

    public $cartlist;

    public function mount()
    {
        
    }


    
    public function render()
    {
        return view('livewire.item-total');
    }
}
