<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Line;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = customer::all();

        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lines = Line::all();
        return view('customers.create', compact('lines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'line_id' => 'required',
        ]);
        Customer::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'contact1'=>$request->contact1,
            'contact2'=>$request->contact2,
            'gstnumber'=>$request->gstnumber,
            'line_id'=>$request->line_id,
             'guard_name'=>'web'
        ]);

        return redirect()->route('customers.index')->withSuccess('customer added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $lines = Line::all();
        return view('customers.edit', compact('customer','lines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'line_id' => 'required',
        ]);
        $customer->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'contact1'=>$request->contact1,
            'contact2'=>$request->contact2,
            'gstnumber'=>$request->gstnumber,
            'line_id'=>$request->line_id,
        ]);

        
        return redirect()->back()->withSuccess('Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
