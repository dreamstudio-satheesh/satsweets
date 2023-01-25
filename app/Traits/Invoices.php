<?php

namespace App\Traits;

use App\Models\Invoice;
use App\Models\Invoice_item;

trait Invoices {


    public function create_invoice($data)
    {
        $invoice_num=Invoice::max('invoice_number')+1;        

        $invoice=Invoice::create([
            'invoice_number' => $invoice_num,
            'date' => $data['invoice_date'],
            'customer_id' => $data['customer_id'],
            'taxamount' => $data['taxamount'],
            'sub_total' => $data['sub_total'],
            'total' => $data['total'],
        ]);

        foreach ($data['items'] as $key => $item) {
           Invoice_item::create([
            'invoice_id' => $invoice->invoice_number,
            'product_code' => $item['code'],
            'name' => $item['name'],
            'price' => $item['price'],
            'gst' => $item['gst'],
            'hsncode' => $item['hsncode'],
            'gstamount' => $item['gstamount'],
            'quantity' => $item['quantity'],
            'total' => $item['total'],
          ]);
          
        }
        session()->flash('success', 'Invoice Created Successfully.');
        return redirect(route('saleslist'));        
    }



}