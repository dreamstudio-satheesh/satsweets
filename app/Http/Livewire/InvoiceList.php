<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InvoiceList extends Component
{
    public $invoices;

    public $invoice_number;

    public $updateMode = false;
    
    public function createpayment($id)
    {
       $this->invoice_number=$id;
    }

    public function render()
    {
        return view('livewire.invoice-list');
    }
}
