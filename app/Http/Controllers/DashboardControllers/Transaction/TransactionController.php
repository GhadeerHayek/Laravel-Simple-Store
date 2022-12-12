<?php

namespace App\Http\Controllers\DashboardControllers\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::withTrashed()->with('Store')->with('Product')->select('*')->get();
        $total = DB::select("SELECT sum(price) from transactions;");
        return view('dashboard.transactions.index', ['total' => $total])->with('transactions', $transactions);
    }

    public function stats()
    {
        $sales_per_product = DB::select("
            SELECT
	t.product_id,
	p.name as 'product_name',
	sum( t.price ) AS 'total_sales'
FROM
	`transactions` t
	JOIN `products` p ON ( p.`id` = t.`product_id` )
GROUP BY
	`product_id`, `product_name`;
        ");
        return view('dashboard.transactions.stats')->with('sales_per_product', $sales_per_product);
    }

}
