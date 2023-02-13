<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InvoiceItem extends Component
{
    public $item;

   

    public function mount()
    {

    }
    
    public function render()
    {
        return view('livewire.invoice-item');
    }
}
