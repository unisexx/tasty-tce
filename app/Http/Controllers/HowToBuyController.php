<?php

namespace App\Http\Controllers;

use App\HowToBuy;

class HowToBuyController extends Controller
{
    public function index()
    {
        $how = HowToBuy::first();
        return view('how-to-buy', compact('how'));
    }
}
