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

        return view('products.index', compact('products'));
    }


    public function cart()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.cart', compact('categories','products'));
    }

    public function cartshow()
    {
       
        $categories = Category::all();
        return view('products.cart', compact('categories'));
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
        if ($request->has('photo')) {
            $ext = $request->file('photo')->getClientOriginalExtension();
            $photo = $request->file('photo')->storeAs('products', uniqid() . "." . $ext, 'public');               
            }
            else{
                $photo='products/default.png';
            }

            Product::create([
                'name'=>$request->name,
                'price'=>$request->price,
                'stocks'=>$request->stocks,
                'photo'=> $photo,
                'category_id'=>$request->category_id,
                'guard_name'=>'web'
            ]);

        return redirect()->route('products.index')->withSuccess('product added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
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
        //
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
