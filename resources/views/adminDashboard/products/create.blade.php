@extends('layouts/main_layout')
@Section("PageTitle")
    Add Product
@endsection
@Section('PageInnerTitle')
    Add new Product
@endsection
@Section('PageMainContent')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add new product</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{URL('/products')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Enter Product name">
                        </div>

                        <div class="form-group">
                            <label for="description">Product Description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                   placeholder="Enter Product Description">
                        </div>

                        <div class="form-group">
                            <label for="price">Product Price</label>
                            <input type="text" class="form-control" id="price" name="price"
                                   placeholder="Enter Product Price">
                        </div>

                        <div class="form-group">
                            <label for="image">Product Image</label>
                            <input type="file" class="form-control" id="image" name="image"
                                   placeholder="Select Product Image">
                        </div>
                        <div class="form-group">
                            <label for="storeID">Store Name</label><br>
                            <select name="storeID" class="form-select h-100 w-100 ">
                                <option selected></option>
                                @foreach($stores as $store)
                                    <option value="{{$store->id}}">{{$store->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
