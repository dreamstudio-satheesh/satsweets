<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;


class InvoiceController extends Controller
{

    public function show($id)
    {
        $invoice = Invoice::with(['invoice_items','customer'])->where('id',$id)->first();
        $fivegst=0; $twelvegst=0;
        foreach ($invoice->invoice_items as $item) {
            if ($item->gst == 5) {
                $fivegst =$fivegst+($item->gstamount * $item->quantity );
            }

            if ($item->gst == 12) {
                $twelvegst =$twelvegst+ ($item->gstamount  * $item->quantity );
            }
        }
        return view('sales.invoice',compact('invoice','fivegst','twelvegst'));
    }

    public function editinvoice($id)
    {
        $invoice = Invoice::with(['invoice_items','customer'])->where('id',$id)->first();
       return view('invoices.edit', compact('invoice'));
       
    }

    public function delete($id)
    {
        Invoice::find($id)->delete();
  
        return back();
    }
}
