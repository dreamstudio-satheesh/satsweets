<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use Livewire\Component;

class InvoiceList extends Component
{
    public $invoices;

    public $invoice_number;

    public $amount_to_pay;

    public $updateMode = false;

    public function mount()
    {
        $this->invoices = Invoice::orderBy('id')->get();
    }
    
    public function createpayment($id)
    {
       $this->invoice_number=$id;
       $invoice =Invoice::where('id', $id)->first();
       $this->amount_to_pay = $invoice->total - $invoice->paid_amount;
    }

    public function render()
    {
        
        return view('livewire.invoice-list');
    }
}
