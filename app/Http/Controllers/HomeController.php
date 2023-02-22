<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $invoices = Invoice::whereDate('date', Carbon::today())->get();
         $invoicetotal=0;
         $salesreturn=0;
         foreach ($invoices as  $invoice) {
            $invoicetotal=$invoicetotal+$invoice->total;
            $salesreturn=$salesreturn+$invoice->salesreturn;
         }
        return view('home',compact('invoicetotal','salesreturn'));
    }
}
