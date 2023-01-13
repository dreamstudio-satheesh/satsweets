<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    

    public function thermal($id)
    {
       $invoice = Invoice::with(['invoice_items','customer'])->where('id',$id)->first();
       $data=array();
       $customPaper = array(0,0,280,650);
       $pdf = Pdf::loadView('invoices.thermal', $data)->setPaper($customPaper);
       return $pdf->stream();

    }
}
