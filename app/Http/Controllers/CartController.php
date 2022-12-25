<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function newsales()
    {
           
        $categories = Category::with('products')->orderBy('id')->get();
        return view('cart.shop', compact('categories'));
    }

    public function cart()
    {
        return view('cart.show');
    }

    public function cartshow(Category $category)
    {
        $products = Product::latest()->get();   
        $categories = Category::all();
        return view('cart', compact('categories','products'));
    }
}
