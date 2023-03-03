<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sales()
    {
        return Customer::with(['invoices'=> function($q){
            $q->where('date', '2023-02-06');
        }])->where('line_id',11)->get();
    }

}
