<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sales()
    {
        return Customer::with(['invoices' => function (Builder $query) {
            $query->where('date','2023-02-29');
        }])->where('line_id',11)->get();
    }

}
