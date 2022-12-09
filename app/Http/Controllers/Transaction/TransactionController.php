<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::withTrashed()->with('Store')->with('Product')->select('*')->get();
        $total = DB::select("SELECT sum(price) from transactions;");
        return view('adminDashboard.transactions.index', ['total' => $total])->with('transactions', $transactions);
    }

    public function stats()
    {
        $sales_per_product = DB::select("
        SELECT sum(price), product_id
        from transactions
        group by product_id;
        ");
        dd($sales_per_product);
        return view('adminDashboard.transactions.stats');
    }

}
