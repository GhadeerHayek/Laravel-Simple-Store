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
        $total = DB::select("SELECT sum(price) from transcations;");
        return view('adminDashboard.transactions.index')->with('transactions', $transactions)->with('total', $total);
    }

    public function stats(){
        return view('adminDashboard.transactions.stats');

    }

}
