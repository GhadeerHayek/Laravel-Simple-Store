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

    public function search()
    {
        $stores_products = Store::with('Product')->get();
        /*
        $searchKey = $request->query('searchKey');
        $products = Product::where('name', $searchKey)->get();
        return view('website.search')->with('products', $products)->with('stores_products', $stores_products);
        */
        return view('website.search')->with('stores_products', $stores_products);
    }

    public function showStore($store)
    {
        $stores_products = Store::with('Product')->where('id', '=', $store)->get();
        # dd($stores_products);
        return view('website.store')->with('stores_products', $stores_products);

    }
}
