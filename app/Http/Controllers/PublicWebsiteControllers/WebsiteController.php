<?php

namespace App\Http\Controllers\PublicWebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Product;
use App\Models\Transaction;

class WebsiteController extends Controller
{
    public function index()
    {
        $stores = Store::get();
        return view('website.index')->with('stores', $stores);
    }

    public function search(Request $request)
    {
        $products = Product::where('name', 'like', '%' . $request->query('searchKey') . '%')->get();
        return view('website.search')->with('products', $products);
    }

    public function displayStoreProducts($store)
    {
        $stores = Store::get();
        $stores_products = Store::with('Product')->where('id', '=', $store)->first();
        # dd($stores_products);
        return view('website.store')->with('stores_products', $stores_products)->with('stores', $stores);

    }

    public function showProductBilling($product)
    {
        $stores = Store::get();
        $productObject = Product::with('Store')->find($product);
        # dd($productObject);
        # echo $productObject->store->id;
        return view("website.purchase")->with('stores', $stores)->with('product', $productObject);
    }

    public function handlePurchase(Request $request)
    {
        $store_id = $request['storeID'];
        $product_id = $request['productID'];
        $product_price = $request['price'];
        $request_time = date('Y-m-d H:i:s');
        $transaction = new Transaction();
        $transaction->store_id = $store_id;
        $transaction->product_id = $product_id;
        $transaction->price = $product_price;
        $transaction->transaction_time = $request_time;
        $transaction->save();
        return redirect('/website/home');
    }
}
