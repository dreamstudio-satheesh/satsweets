<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use Livewire\Component;

class InvoiceList extends Component
{
    //public $invoices;

    public $invoice_number;

    public $amount_to_pay;

    public $updateMode = false;
    
    public function createpayment($id)
    {
       $this->invoice_number=$id;
       $invoice =Invoice::where('id', $id)->get();

       $this->amount_to_pay = $invoice->total;
    }

    public function render()
    {
        $invoices = Invoice::orderBy('id')->get();
        return view('livewire.invoice-list',compact('invoices'));
    }
}
