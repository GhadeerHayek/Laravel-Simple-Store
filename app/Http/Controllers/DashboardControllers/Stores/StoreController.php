<?php

namespace App\Http\Controllers\DashboardControllers\Stores;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function index()
    {
        $stores = Store::withTrashed()->get();
        return view('dashboard.stores.index')->with('stores', $stores);
    }

    public function create()
    {
        return view('dashboard.stores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'StoreName' => 'required',
            'StoreLocation' => 'required',
        ]);
        $store = new Store;
        $store->name = $request['StoreName'];
        $store->location = $request['StoreLocation'];
        $store->save();
        return redirect()->back();
    }
    public function edit($store)
    {
        $store = Store::where('id', $store)->first();
        return view('dashboard.stores.edit')->with('store', $store);
    }

    public function update(Request $request, $store)
    {
        $request->validate([
            'StoreName' => 'required',
            'StoreLocation' => 'required',
        ]);
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
