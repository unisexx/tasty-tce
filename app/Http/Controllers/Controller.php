<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $contact = Contact::first();
        View::share('contact', $contact);

        $product_categories = \App\ProductCategory::active()->orderBy('order', 'asc')->get();
        View::share('product_categories', $product_categories);
    }
}
