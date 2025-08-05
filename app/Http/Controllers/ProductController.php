<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'images.*' => 'required|image|max:2048', // 2MB max
        ]);

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $product->images()->create([
                    'image_url' => Storage::url($path),
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Product added successfully!');
    }

    public function destroy(Product $product)
    {
        foreach ($product->images as $img) {
            $path = str_replace('/storage/', 'public/', $img->image_url);
            Storage::delete($path);
        }
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted.');
    }
}