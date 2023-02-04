<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.index', compact('products','categories'));
    }


    public function show($id)
    {
        $products = Product::where('category_id',$id)->get();
        $categories = Category::all();
        return view('products.index', compact('products','categories'));
    }


 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //return $request->all();
        $validated = $request->validate([
            'name' => 'required|max:255',
            'code' => 'required|min:4|max:12',
            'price' => 'required',
            'hsncode' => 'required',
            'gst' => 'required',
            'stocks' => 'required',
            'category_id' => 'required',
        ]);
        
         $product = Product::create([
            'name'=>$request->name,
            'code'=>$request->code,
            'price'=>$request->price,
            'hsncode'=>$request->hsncode,
            'gst'=>$request->gst,
            'stocks'=>$request->stocks,
            'category_id'=>$request->category_id,
            'guard_name'=>'web'
        ]);    

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {

            if (isset($mediaItems[0])) {
                $mediaItems[0]->delete();
            }    

            $product->addMediaFromRequest('photo')->toMediaCollection('products');               
        }     

        return redirect()->route('products.index')->withSuccess('product added');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'code' => 'required|min:4|max:12',
            'price' => 'required',
            'hsncode' => 'required',
            'gst' => 'required',
            'stocks' => 'required',
            'category_id' => 'required',
        ]);
        $product->update([
            'name'=>$request->name,
            'code'=>$request->code,
            'price'=>$request->price,
            'hsncode'=>$request->hsncode,
            'gst'=>$request->gst,
            'stocks'=>$request->stocks,
            'category_id'=>$request->category_id,
            'guard_name'=>'web'
        ]);

       

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {

            $mediaItems = $product->getMedia();
            if (isset($mediaItems[0])) {
                $mediaItems[0]->delete();
            }          

            $product->addMediaFromRequest('photo')->toMediaCollection('products');               
        }     
        return redirect('products')->withSuccess('Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
