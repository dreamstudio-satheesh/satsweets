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
}
