<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withTrashed()->with('Store')->get();
        foreach ($products as $product) {
            $img_link = Storage::url($product->image_url);
            $product->image_url = $img_link;
        }
        return view('adminDashboard.products.index')->with('products', $products);
    }

    public function create()
    {
        $stores = Store::select('id', 'name')->get();
        return view('adminDashboard.products.create')->with('stores', $stores);
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $name = (time() + rand(1, 100000000)).'.'.$image->getClientOriginalExtension();
        $path = 'public/images/';
        Storage::disk('local')->put($path.$name, file_get_contents($image));
        $product = new Product();
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->store_id = $request['storeID'];
        $product->is_discount = 0;
        $product->price_after_discount = $product->price;
        $product->image_url = $path . $name;
        $product->save();
        return redirect()->back();
    }

//    public function show($product)
//    {
//
//    }

    public function edit($product)
    {
        $product = Product::where('id', $product)->first();
        $stores = Store::get();
        return view('adminDashboard.products.edit')->with('product', $product)->with('stores', $stores);
    }

    public function update(Request $request, $product)
    {
        $image = $request->file('image');
        $name = (time() + rand(1, 100000000)).'.'.$image->getClientOriginalExtension();
        $path = 'public/images/';
        Storage::disk('local')->put($path.$name, file_get_contents($image));


        $product = Product::where('id', $product)->first();
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->image_url = $path . $name;
        $product->is_discount = $request['is_discount']?? 0;
        $product->price_after_discount = $request['price_after_discount']??0;
        # the form will have a list of stores ids or stores names which is then converted to ids?
        $product->store_id = $request['store_id'];
        $product->save();
        return redirect()->back();

    }

    public function destroy($product)
    {
        Product::where('id', $product)->delete();
        return redirect()->back();
    }

    public function restore($product)
    {
        Product::where('id', $product)->restore();
        return redirect()->back();
    }
}
