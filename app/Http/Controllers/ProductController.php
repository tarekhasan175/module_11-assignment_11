<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return redirect()->route('products.create')->with('success', 'Product created successfully');
    }
}
