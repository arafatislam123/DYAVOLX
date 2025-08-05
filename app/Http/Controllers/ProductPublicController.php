<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductPublicController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->get();
        return view('products.index', compact('products'));
    }
}