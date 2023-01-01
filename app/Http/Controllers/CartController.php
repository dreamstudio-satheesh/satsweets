<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    public function newsales($categoryId='1')
    {
        $products = Product::where('category_id', $categoryId)->get();
        $categories = Category::with('products')->orderBy('id')->get();
        return view('cart.shop', compact('categories','products'));
    }

    public function cart()
    {
        return view('cart.show');
    }

    public function show()
    {
       return  Cart::getContent();
       
    }

    public function cartshow(Category $category)
    {
        $products = Product::latest()->get();   
        $categories = Category::all();
        return view('cart', compact('categories','products'));
    }
}
