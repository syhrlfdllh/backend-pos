<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = \App\Models\Product::orderBy('id', 'desc')->get();
        return response()->json([
            'success' => true,
            'message' => 'List products',
            'data' => $products
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|min:3|unique:products',
        //     'description' => 'required|min:10',
        //     'price' => 'required|integer',
        //     'stock' => 'required|integer',
        //     'category' => 'required|in:food,drink,snack',
        //     'image' => 'required|image|mimes:jpeg,png,jpg',
        // ]);

        // $filename = time() . '.' . $request->image->extension();
        // $request->image->storeAs('public/products', $filename);
        // $data = $request->all();

        // $product = new \App\Models\Product();
        // $product->name = $request->name;
        // $product->description = $request->description;
        // $product->price = (int) $request->price;
        // $product->stock = (int) $request->stock;
        // $product->category = $request->category;
        // $product->image = $filename;
        // $product->save();

        // return redirect()->route('product.index')->with('success', 'Product successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
