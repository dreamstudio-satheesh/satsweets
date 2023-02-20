<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;


class InvoiceController extends Controller
{

    public function show($id)
    {
        $invoice = Invoice::with(['invoice_items','customer'])->where('id',$id)->first();
        if ($invoice) {

            $fivegst=0; $twelvegst=0;
            foreach ($invoice->invoice_items as $item) {
                if ($item->gst == 5) {
                    $fivegst =$fivegst+($item->gstamount * $item->quantity );
                }

                if ($item->gst == 12) {
                    $twelvegst =$twelvegst+ ($item->gstamount  * $item->quantity );
                }
            }
            if ($invoice->status !='Paid') {
                $unpaid= Invoice::select('invoice_number','total','paid_amount')->where('customer_id' ,$invoice->customer_id )->where('status','Unpaid')->where('status','Partial')->get();
            }
            else $unpaid=false ;
           

             return view('sales.invoice',compact('invoice','fivegst','twelvegst','unpaid'));
        }
    }

    public function editinvoice($id)
    {
       
       return view('invoices.edit', compact('id'));
       
    }

    public function delete($id)
    {
        Invoice::find($id)->delete();
  
        return back();
    }
}
