<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productCount = DB::select("select count(*) AS 'product_count' from PRODUCTS");
        $storeCount = DB::select("select count(*) AS 'store_count' from STORES");
        $transactionData = DB::select("select count(*) AS 'transaction_count' , sum(price) AS 'total_sales' from TRANSACTIONS");
        $data = [
            'product_count'=>$productCount[0]->product_count,
            'store_count'=>$storeCount[0]->store_count,
            'transaction_count'=>$transactionData[0]->transaction_count,
            'total_sales'=>$transactionData[0]->total_sales
        ];
        return view('dashboard/index')->with('data', $data);
    }
}
