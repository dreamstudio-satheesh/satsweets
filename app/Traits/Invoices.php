<?php

namespace App\Traits;

use App\Models\Invoice;

trait Invoices {



    public function create()
    {
       Invoice::create();
    }



}