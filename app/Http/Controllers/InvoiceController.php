<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;


class InvoiceController extends Controller
{

    public function show($id)
    {
        $invoice = Invoice::with(['invoice_items','customer'])->where('id',$id)->first();
        return view('sales.invoice',compact('invoice'));
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
