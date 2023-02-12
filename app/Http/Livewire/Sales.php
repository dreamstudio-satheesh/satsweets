<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Invoice;
use WithPagination;

class Sales extends Component
{
    public function render()
    {
        return view('livewire.sales', [
            'invoices' => Invoice::paginate(10),
        ]);
       // return view('livewire.sales');
    }
}
