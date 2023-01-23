<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SalesPayment;

class PaymentController extends Controller
{
    


    public function create($id)
    {
        return view('payments.create');
    }
}
