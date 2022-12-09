<?php

namespace App\Http\Controllers\PublicWebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Product;

class WebsiteController extends Controller
{
    public function index()
    {
        $stores_products = Store::with('Product')->get();
        return view('website.index')->with('stores_products', $stores_products);
    }
}
