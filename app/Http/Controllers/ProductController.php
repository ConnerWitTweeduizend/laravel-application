<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(ProductRequest $request)
    {
        $newProduct = Product::create($request->all());
        return redirect(route('product.index'));
    }
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }
    public function update(Product $product, ProductRequest $request)
    {
        $product->update($request->all());
        return redirect(route('product.index'))->with('success', 'Product Updated Succesfully');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Succesfully');
    }
    public function getProducts()
    {
        $Products = Product::all();
        return response()->json($Products);
    }
}
