@extends('layouts.dashboard_main_layout')
@Section("PageTitle")
    Add Store
@endsection
@Section('PageInnerTitle')
    Add new Store
@endsection
@Section('PageMainContent')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add new store</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{URL('/stores')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="StoreName">Store Name</label>
                            <input type="text" class="form-control" id="StoreName" name="StoreName"
                                   placeholder="Enter Store name">
                        </div>

                        <div class="form-group">
                            <label for="StoreLocation">Store Location</label>
                            <input type="text" class="form-control" id="StoreLocation" name="StoreLocation"
                                   placeholder="Enter Store Location">
                        </div>
                        <div class="form-group">
                            <label for="image">Store Image</label>
                            <input type="file" class="form-control" id="image" name="image"
                                   placeholder="Select Store Image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
