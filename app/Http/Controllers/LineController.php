<?php

namespace App\Http\Controllers;

use App\Models\Line;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lines = Line::all();

        return view('lines.index', compact('lines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lines.create');
    }

    public function submit(Request $request)
    {
        
        $user =Auth::user();
        $user->user_line_id = $request['line_id'];
        $user->save();

        return redirect('pos')->withSuccess('Updated');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'line' => 'required',
        ]);
         Line::create([
            'name'=>$request->name, 
            'line'=>$request->line, 
            'guard_name'=>'web'
        ]);

        return redirect()->route('lines.index')->withSuccess('Line added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function select()
    {
        $line=auth()->user()->line_id;
        $lines = Line::where('line', $line)->get();
        return view('settings.selectline', compact('lines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function edit(Line $line)
    {
        return view('lines.edit', compact('line'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLineRequest  $request
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Line $line)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'line' => 'required',
        ]);
        $line->update([
        'name'=>$request->name,
        'line'=>$request->line, 
    ]);
        
        return redirect('lines')->withSuccess('Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function destroy(Line $line)
    {
        //
    }
}
