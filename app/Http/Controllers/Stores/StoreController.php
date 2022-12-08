<?php

namespace App\Http\Controllers\Stores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{

    public function index()
    {
        $stores = Store::withTrashed()->get();
        return view('adminDashboard.stores.index')->with('stores', $stores);
    }

    public function create()
    {
        return view('adminDashboard.stores.create');
    }

    public function store(Request $request)
    {
        $store = new Store;
        $store->name = $request['StoreName'];
        $store->location = $request['StoreLocation'];
        $store->save();

        return redirect()->back();
    }

//    public function show($store)
//    {
//
//    }

    public function edit($store)
    {
        echo "redirect success";
        $store = Store::where('id', $store)->first();
        return view('adminDashboard.stores.edit')->with('store', $store);
    }

    public function update(Request $request, $store)
    {
        echo "redirect success";
        $store = Store::where('id', $store)->first();
        $store->name = $request['StoreName'];
        $store->location = $request['StoreLocation'];
        $store->save();

        return redirect()->back();
    }

    public function destroy($store)
    {
        Store::where('id', $store)->delete();
        return redirect()->back();
    }

    public function restore($store)
    {
        Store::where('id', $store)->restore();
        return redirect()->back();
    }
}
