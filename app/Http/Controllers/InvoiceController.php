<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;


class InvoiceController extends Controller
{

    public function show($id)
    {
        return view('sales.invoice');
    }
}
