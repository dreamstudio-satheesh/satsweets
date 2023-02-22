<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Invoice;
use App\Models\Customer;
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
         $customers = Customer::count();
         $invoicescount = Invoice::count();
         $invoicetotal=0;
         $salesreturn=0;
         foreach ($invoices as  $invoice) {
            $invoicetotal=$invoicetotal+$invoice->total;
            $salesreturn=$salesreturn+$invoice->salesreturn;
         }
         $customers = Customer::count();
         return view('home',compact('invoicetotal','salesreturn','invoicescount','customers'));
    }
}
