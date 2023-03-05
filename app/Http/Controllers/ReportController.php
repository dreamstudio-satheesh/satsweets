<?php

namespace App\Http\Controllers;

use App\Models\Line;
use App\Models\Customer;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sales($id=1)
    {
        $date='2023-03-02';

        $lines=Line::all();
       
         $customers= Customer::with(['invoices'=> function($q)use($date){
            $q->where('date', $date);
        }])->where('line_id',$id)->get();

        return view('report.salesreport',compact('customers','lines'));
    }

}
