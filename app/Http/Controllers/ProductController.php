<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of product
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    // Show the form for creating a new product
    public function create()
    {
        return view('product.create');
    }

    // Store a newly created product in storage
    public function store(Request $request)
    {
        $request->validate([
            'DATE_OFFERED' => 'required|date',
            'NAME' => 'required|string|max:255',
            'PRODUCT_TYPE_CD' => 'required|string|max:10',
        ]);

        Product::create($request->all());
        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
    }

    // Display the specified product
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    // Show the form for editing the specified product
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    // Update the specified product in storage
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'DATE_OFFERED' => 'required|date',
            'NAME' => 'required|string|max:255',
            'PRODUCT_TYPE_CD' => 'required|string|max:10',
        ]);

        $product->update($request->all());
        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully.');
    }

    // Remove the specified product from storage
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'Product deleted successfully.');
    }
}
