<?php

namespace App\Http\Controllers;

use App\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::first();
        return view('service', compact('service'));
    }
}
