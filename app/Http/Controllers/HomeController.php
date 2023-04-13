<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Product;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $products = Product::latest()->get();
        $partners = Partner::latest()->get();

        return view('pages.home', compact('setting', 'products', 'partners'));
    }
}