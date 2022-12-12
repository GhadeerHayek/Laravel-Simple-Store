@extends('layouts.dashboard_main_layout')

@Section("PageTitle")
    Purchasing Transactions
@endsection
@Section('PageInnerTitle')
    Purchasing Transactions
@endsection
@Section('PageMainContent')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Purchasing Transactions</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Store Name</th>
                                <th>Product Name</th>
                                <th>Purchase Price</th>
                                <th>Transaction Time</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{$transaction->id}}</td>
                                    <td>{{$transaction->store->name}}</td>
                                    <td>{{$transaction->product->name}}</td>
                                    <td>{{$transaction->price}}</td>
                                    <td>{{$transaction->transaction_time}}</td>
                                    <td>{{$transaction->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th style="text-align:center;"><a href="{{URL('/transactions/stats')}}"> Products Sales
                                        Statistics</a></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
