@extends('layouts.dashboard_main_layout')

@Section("PageTitle")
    Dashbord
@endsection
@Section('PageInnerTitle')
    Dashboard
@endsection
@Section('PageMainContent')
    <!-- SECTION main page content-->
    <!-- row -->
    <div class="row">
        <div class="col-lg-6 col-sm-24">
            <div class="card">
                <div class="stat-widget-two card-body">
                    <div class="stat-content">
                        <div class="stat-text">Total Stores</div>
                        <div class="stat-digit">{{$data['store_count']}}</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success w-{{$data['store_count']}}" role="progressbar"
                             aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-24">
            <div class="card">
                <div class="stat-widget-two card-body">
                    <div class="stat-content">
                        <div class="stat-text">Total Products</div>
                        <div class="stat-digit">{{$data['product_count']}}</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary w-{{$data['product_count']}}" role="progressbar"
                             aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <div class="stat-widget-two card-body">
                    <div class="stat-content">
                        <div class="stat-text">Total Purchase Transactions</div>
                        <div class="stat-digit">{{$data['transaction_count']}}</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning w-{{$data['transaction_count']}}" role="progressbar"
                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <div class="stat-widget-two card-body">
                    <div class="stat-content">
                        <div class="stat-text">Total Sales</div>
                        <div class="stat-digit"></i>{{$data['total_sales']}}<i class="fa fa-usd"></i> </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger w-@if($data['total_sales'] > 100 )95 @else{{$data['total_sales']}}@endif" role="progressbar" aria-valuenow="65"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
    </div>
@endsection

