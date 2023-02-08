<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use Livewire\Component;
use Carbon\Carbon;
use App\Models\SalesPayment;

class InvoiceList extends Component
{
    public $invoices, $invoice_number, $amount_to_pay, $payment_amount, $payment_date, $reference, $notes ;

    public $payment_type='1';

    public $updateMode = false;


    public function mount()
    {
        $this->invoices = Invoice::with(['user'])->orderBy('id')->get();

        $this->payment_date=Carbon::now()->format('Y-m-d');
    }
    
    protected $rules = [
        'payment_amount' => 'required',
        'payment_date' => 'required',
    ];

    public function submit()
    {
        $this->validate();
      
 
        // Execution doesn't reach here if validation fails.
 
        SalesPayment::create([
            'invoice_num' => $this->invoice_number,
            'payment_date' => $this->payment_date,
            'payment_type' => $this->payment_type,
            'amount' => $this->payment_amount,
            'reference' => $this->reference,
            'notes' => $this->notes,
        ]); 

        

        $this->close();
    }

    public function close()
    {
        $this->reset(['amount_to_pay', 'paying_amount']);
        $this->emit('close_payment_modal');
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
