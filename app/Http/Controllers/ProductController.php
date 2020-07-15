<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::active()->orderBy('id', 'desc')->paginate(9);

        return view('product', compact('products'));
    }

    public function category($id)
    {
        $product_category = ProductCategory::active()->with('products')->findOrFail($id);
        $products = $product_category->products()->active()->orderBy('id', 'desc')->paginate(9);

        return view('product-category', compact('product_category', 'products'));
    }

    public function detail($id)
    {
        $product = Product::active()->with('productCategory')->findOrFail($id);

        return view('product-detail', compact('product'));
    }
}
