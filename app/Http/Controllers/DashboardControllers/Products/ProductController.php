<?php

namespace App\Http\Controllers\DashboardControllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withTrashed()->with('Store')->get();
        return view('dashboard.products.index')->with('products', $products);
    }

    public function create()
    {
        $stores = Store::select('id', 'name')->get();
        return view('dashboard.products.create')->with('stores', $stores);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',

        ]);

        $imageName = (time() + rand(1, 100000000)) . '.' . $request->image->extension();
        $path = "images/";
        $image_path = $request->file('image')->storeAs($path, $imageName, 'public');

        $productObject = new Product();
        $productObject->name = $request['name'];
        $productObject->description = $request['description'] ?? "";
        $productObject->price = $request['price'];
        $productObject->store_id = $request['storeID'];
        $productObject->is_discount = 0;
        $productObject->price_after_discount = $productObject->price;
        $productObject->image_url = Storage::url($path . $imageName);
        $productObject->save();
        return redirect()->back();
    }

    public function edit($product)
    {
        $product = Product::where('id', $product)->first();
        $stores = Store::get();
        return view('dashboard.products.edit')->with('product', $product)->with('stores', $stores);
    }

    public function update(Request $request, $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'storeID' => 'required',

        ]);
        $productObject = Product::find($product);
        $productObject->name = $request['name'];
        $productObject->description = $request['description'];
        $productObject->price = $request['price'];
        if (!is_null($request['image'])) {
            $imageName = (time() + rand(1, 100000000)) . '.' . $request->image->extension();
            $path = "images/";
            $image_path = $request->file('image')->storeAs($path, $imageName, 'public');
            $productObject->image_url = Storage::url($path . $imageName);
        }
        if ($request['is_discount'] === "onDiscount") {
            $productObject->is_discount = 1;
        } else {
            $productObject->is_discount = 0;
        }
        if (is_null($request['priceOnDiscount'])) {
            $productObject->price_after_discount = $productObject['price'];
        } else {
            $productObject->price_after_discount = $request['priceOnDiscount'];
        }
        $productObject->store_id = $request['storeID'];
        $productObject->save();
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
