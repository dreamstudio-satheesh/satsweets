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
        $date='2023-02-29';
       
        return Customer::with(['invoices'=> function($q)use($date){
            $q->where('date','2023-02-29');
        }])->where('line_id',11)->get();
    }

}
