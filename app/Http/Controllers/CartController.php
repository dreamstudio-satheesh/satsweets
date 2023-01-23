<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Category;
//use Illuminate\Http\Request;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Invoice as PDFinvoice;

class CartController extends Controller
{
    public function saleslist()
    {
        
        return view('sales.saleslist');
        
    }

    public function editcart($id)
    {
        $invoice = Invoice::with(['invoice_items','customer'])->where('id',$id)->first();
       return view('cart.edit', compact('invoice'));
       
    }

    public function pos()
    {
        $categories = Category::with('products')->orderBy('id')->get();
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


    public function invoicetwo()
    {
        $client = new Party([
            'name'          => 'Roosevelt Lloyd',
            'phone'         => '(520) 318-9486',
            'custom_fields' => [
                'note'        => 'IDDQD',
                'business id' => '365#GG',
            ],
        ]);

        $customer = new Party([
            'name'          => 'Ashley Medina',
            'address'       => 'The Green Street 12',
            'code'          => '#22663214',
            'custom_fields' => [
                'order number' => '> 654321 <',
            ],
        ]);

        $items = [
            (new InvoiceItem())
                ->title('Service 1')
                ->description('Your product or service description')
                ->pricePerUnit(47.79)
                ->quantity(2)
                ->discount(10),
            (new InvoiceItem())->title('Service 2')->pricePerUnit(71.96)->quantity(2),
            (new InvoiceItem())->title('Service 3')->pricePerUnit(4.56),
            (new InvoiceItem())->title('Service 4')->pricePerUnit(87.51)->quantity(7)->discount(4)->units('kg'),
            (new InvoiceItem())->title('Service 5')->pricePerUnit(71.09)->quantity(7)->discountByPercent(9),
            (new InvoiceItem())->title('Service 6')->pricePerUnit(76.32)->quantity(9),
            (new InvoiceItem())->title('Service 7')->pricePerUnit(58.18)->quantity(3)->discount(3),
            (new InvoiceItem())->title('Service 8')->pricePerUnit(42.99)->quantity(4)->discountByPercent(3),
            (new InvoiceItem())->title('Service 9')->pricePerUnit(33.24)->quantity(6)->units('m2'),
            (new InvoiceItem())->title('Service 11')->pricePerUnit(97.45)->quantity(2),
            (new InvoiceItem())->title('Service 12')->pricePerUnit(92.82),
            (new InvoiceItem())->title('Service 13')->pricePerUnit(12.98),
            (new InvoiceItem())->title('Service 14')->pricePerUnit(160)->units('hours'),
            (new InvoiceItem())->title('Service 15')->pricePerUnit(62.21)->discountByPercent(5),
            (new InvoiceItem())->title('Service 16')->pricePerUnit(2.80),
            (new InvoiceItem())->title('Service 17')->pricePerUnit(56.21),
            (new InvoiceItem())->title('Service 18')->pricePerUnit(66.81)->discountByPercent(8),
            (new InvoiceItem())->title('Service 19')->pricePerUnit(76.37),
            (new InvoiceItem())->title('Service 20')->pricePerUnit(55.80),
        ];

        $notes = [
            'your multiline',
            'additional notes',
            'in regards of delivery or something else',
        ];
        $notes = implode("<br>", $notes);

        $invoice = PDFinvoice::make('receipt')
            // ability to include translated invoice status
            // in case it was paid
            ->status(__('invoices::invoice.paid'))
            ->sequence(667)
            ->seller($client)
            ->buyer($customer)
            ->date(now()->subWeeks(3))
            ->dateFormat('m/d/Y')
            ->payUntilDays(14)
            ->currencySymbol('$')
            ->currencyCode('USD')
            ->currencyFormat('{SYMBOL}{VALUE}')
            ->currencyThousandsSeparator('.')
            ->currencyDecimalPoint(',')
            ->filename($client->name . ' ' . $customer->name)
            ->addItems($items)
            ->notes($notes)
            ->logo(public_path('vendor/invoices/sample-logo.png'))
            // You can additionally save generated invoice to configured disk
            ->save('public');

        $link = $invoice->url();
        // Then send email to party with link

        // And return invoice itself to browser or have a different view
        return $invoice->stream();
    }

}
