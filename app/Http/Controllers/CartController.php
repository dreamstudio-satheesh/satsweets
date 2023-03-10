<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Category;
//use Illuminate\Http\Request;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Invoice as PDFinvoice;
class CartController extends Controller
{
    public function saleslist()
    {
        
        return view('sales.saleslist');
        
    }

    public function unpaidsaleslist()
    {
        
        return view('sales.unpaidsaleslist');
        
    }

    public function sales()
    {
        
       // return view('sales.sales');

       $invoices=Invoice::where('invoice_number','<','1392')->get();

       foreach ($invoices as  $invoice) {
       
        $invoice= Invoice::where('invoice_number',$invoice->invoice_number)->first();

        $invoice->update([
            'paid_amount' => $invoice->total ]);
       }

      
        
    }


   

    public function pos()
    {
        $categories = Category::orderBy('id')->get();
        return view('cart.pos', compact('categories'));
       
    }


    public function thermal($id)
    {
       $invoice = Invoice::with(['invoice_items','customer'])->where('id',$id)->first();
        $customer = new Buyer([
            'name'          =>  $invoice->customer->name,
            'custom_fields' => [
                'address' => $invoice->customer->address,
            ],
        ]);

        $items=[];

        foreach ($invoice->invoice_items as  $item) {

            $items[]= (new InvoiceItem())->title($item->name)->pricePerUnit($item->price - $item->gstamount)->quantity($item->quantity);
        }

        $invoicepage = PDFinvoice::make('TAX INVOICE')
            //->status(__('invoices::invoice.paid'))
            ->sequence($invoice->invoice_number)
            ->buyer($customer)
            ->taxRate(5)
            ->logo(public_path('assets/img/logo.png'))
            ->addItems($items);

        return $invoicepage->stream();
    }

    public function showinvoice($id)
    {
       $invoice = Invoice::with(['invoice_items','customer'])->where('id',$id)->first();
        $customer = new Buyer([
            'name'          =>  $invoice->customer->name,
            'custom_fields' => [
                'address' => $invoice->customer->address,
            ],
        ]);

        $items=[];

        foreach ($invoice->invoice_items as  $item) {

            $items[]= (new InvoiceItem())->title($item->name)->pricePerUnit($item->price - $item->gstamount)->quantity($item->quantity);
        }

        $invoicepage = PDFinvoice::make('TAX INVOICE')
            //->status(__('invoices::invoice.paid'))
            ->sequence($invoice->invoice_number)
            ->buyer($customer)
            ->taxRate(5)
            ->logo(public_path('assets/img/logo.png'))
            ->addItems($items);

        return $invoicepage->stream();
    }


    

}
