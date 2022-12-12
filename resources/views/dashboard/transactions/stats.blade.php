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
                    <h4 class="card-title">    Purchasing Transactions
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Total Sales for product</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $sales_per_product as $row)
                                <tr>
                                    <td>{{$row->product_id}}</td>
                                    <td>{{$row->product_name}}</td>
                                    <td>{{$row->total_sales}}</td>
                                </tr>
                            @endforeach
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
