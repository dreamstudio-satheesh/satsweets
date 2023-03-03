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
        $date='2023-03-02';
       
        return Customer::with(['invoices'=> function($q)use($date){
            $q->where('date', $date);
        }])->where('line_id',11)->get();
    }

}
