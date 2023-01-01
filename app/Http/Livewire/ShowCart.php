<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowCart extends Component
{
    public $barcode = '';

    public $cartlist;

    public function mount()
    {
        
    }

    public function addcart()
    {
    
        $this->barcode='';

    }

    
    public function render()
    {
        return view('livewire.show-cart');
    }
}
