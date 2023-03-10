<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Invoice;
use Livewire\Component;
use App\Models\Customer;
use App\Models\SalesPayment;
use Illuminate\Support\Facades\Auth;


class UnpaidInvoicelist extends Component
{
    public $invoice_number, $amount_to_pay, $payment_amount, $payment_date, $reference, $notes;
    public $payments=array();

    public $payment_type='1';

    public $search = '';

    public $updateMode = false;

    
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
            'created_by' => Auth::user()->id,
        ]); 

       $invoice= Invoice::where('invoice_number',$this->invoice_number)->first();
       $paid_amount=$this->payment_amount+ $invoice->paid_amount;
       if($paid_amount  >= $invoice->total )
            { $invoice_status="Paid"; }
       elseif($paid_amount < $invoice->total && $paid_amount > 0)
            { $invoice_status="Partial";}
       else { $invoice_status="Unpaid"; }
    
      
       $invoice->update([
        'paid_amount' => $paid_amount,
        'status' => $invoice_status,
       ]);

        $this->close();
    }

    public function close()
    {
        $this->reset(['amount_to_pay', 'payment_amount','payment_amount','invoice_number']);
        $this->emit('close_payment_modal');
    }

    public function closeshowpayment()
    {
        $this->reset(['payments', 'payment_amount','payment_amount','invoice_number']);
        $this->emit('close_show_payment_modal');
    }

    public function showpayment($invoice_number)
    {
       $this->payments= SalesPayment::with(['user'])->where('invoice_num', $invoice_number)->get();
    }
    
    public function createpayment($id)
    {
       $this->invoice_number=$id;
       $invoice =Invoice::where('id', $id)->first();
       $this->amount_to_pay = $invoice->total - $invoice->paid_amount;
       $this->payment_amount = $invoice->total - $invoice->paid_amount;
    }

    public function render()
    {
       // $this->invoices = Invoice::with(['user'])->orderBy('id')->get();
       $links=true;

        $this->payment_date=Carbon::now()->format('Y-m-d');
        if (is_numeric($this->search)) {
            $links=false;
            $invoices = Invoice::Where('invoice_number','like', (int)$this->search)->with(['customer'])->orderBy('id', 'DESC')->limit(100)->get();
        }elseif($this->search) {        
            $name=$this->search;
            $links=false;
            $invoices = Invoice::whereHas('customer', function ($query) use ($name) { 
                $query->where('name', 'like', '%'.$name.'%'); })->orderBy('id', 'DESC')->limit(100)->get();
  
        }else{
        $invoices = Invoice::Where('status','Unpaid')->with(['customer'])->paginate(25);
        //->orderBy('id', 'DESC')
        }
        
        return view('livewire.unpaid-invoicelist', compact('invoices','links'));
    }
}
