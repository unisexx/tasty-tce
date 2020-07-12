<?php

namespace App\Http\Controllers;

use App\Hilight;
use App\Product;
use App\ProductCategory;
use App\Service;

class HomeController extends Controller
{
    public function index()
    {
        $hilights = Hilight::active()->orderBy('order', 'asc')->get();
        $product_categories = ProductCategory::active()->orderBy('order', 'asc')->get();
        $service = Service::first();
        $products = Product::active()->orderBy('id', 'desc')->take(9)->get();
        return view('home', compact('hilights', 'product_categories', 'service', 'products'));
    }
}
