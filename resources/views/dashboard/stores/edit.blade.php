@extends('layouts.dashboard_main_layout')
@Section("PageTitle")
    Edit Store
@endsection
@Section('PageInnerTitle')
    Edit Existing Store
@endsection
@Section('PageMainContent')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Store with id: {{$store->id}}</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{URL('/stores/'.$store->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="StoreName">Store Name</label>
                            <input type="text" class="form-control" id="StoreName" name="StoreName"
                                   placeholder="Enter Store name" value="{{$store->name}}">
                        </div>

                        <div class="form-group">
                            <label for="StoreLocation">Store Location</label>
                            <input type="text" class="form-control" id="StoreLocation" name="StoreLocation"
                                   placeholder="Enter Store Location" value="{{$store->location}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
