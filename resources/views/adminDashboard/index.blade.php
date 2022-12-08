@extends('layouts/main_layout')

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
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Total Stores</div>
                                <div class="stat-digit"><i class="fa fa-usd"></i>8500</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success w-85" role="progressbar"
                                     aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Total Products</div>
                                <div class="stat-digit"><i class="fa fa-usd"></i>7800</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary w-75" role="progressbar"
                                     aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Total Purchase Transactions</div>
                                <div class="stat-digit"><i class="fa fa-usd"></i> 500</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning w-50" role="progressbar"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Total Sales</div>
                                <div class="stat-digit"><i class="fa fa-usd"></i>650</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">New Transactions</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Product</th>
                                        <th>quantity</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img width="35" src="{{asset('images/avatar/1.png')}}"
                                                                alt=""></a>
                                            </div>
                                        </td>
                                        <td>Lew Shawon</td>
                                        <td><span>Dell-985</span></td>
                                        <td><span>456 pcs</span></td>
                                        <td><span class="badge badge-success">Done</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img width="35" src="{{asset('images/avatar/1.png')}}"
                                                                alt=""></a>
                                            </div>
                                        </td>
                                        <td>Lew Shawon</td>
                                        <td><span>Asus-565</span></td>
                                        <td><span>456 pcs</span></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img width="35" src="{{asset('images/avatar/1.png')}}"
                                                                alt=""></a>
                                            </div>
                                        </td>
                                        <td>lew Shawon</td>
                                        <td><span>Dell-985</span></td>
                                        <td><span>456 pcs</span></td>
                                        <td><span class="badge badge-success">Done</span></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img width="35" src="{{asset('images/avatar/1.png')}}"
                                                                alt=""></a>
                                            </div>
                                        </td>
                                        <td>Lew Shawon</td>
                                        <td><span>Asus-565</span></td>
                                        <td><span>456 pcs</span></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img width="35" src="{{asset('images/avatar/1.png')}}"
                                                                alt=""></a>
                                            </div>
                                        </td>
                                        <td>lew Shawon</td>
                                        <td><span>Dell-985</span></td>
                                        <td><span>456 pcs</span></td>
                                        <td><span class="badge badge-success">Done</span></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img width="35" src="{{asset('images/avatar/1.png')}}"
                                                                alt=""></a>
                                            </div>
                                        </td>
                                        <td>Lew Shawon</td>
                                        <td><span>Asus-565</span></td>
                                        <td><span>456 pcs</span></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

