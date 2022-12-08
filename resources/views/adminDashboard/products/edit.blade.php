@extends('layouts/main_layout')
@Section("PageTitle")
    Edit Product
@endsection
@Section('PageInnerTitle')
    Edit Product with ID: {{$product->id}}
@endsection
@Section('PageMainContent')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit product</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{URL('/products/'.$product->id)}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Enter Product name" value="{{$product->name}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Product Description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                   placeholder="Enter Product Description" value="{{$product->description}}">
                        </div>

                        <div class="form-group">
                            <label for="price">Product Price</label>
                            <input type="text" class="form-control" id="price" name="price"
                                   placeholder="Enter Product Price" value="{{$product->price}}">
                        </div>

                        <div class="form-group">
                            <!--    TODO: is discount-->
                        </div>
                        <div class="form-group">
                            <label for="priceOnDiscount">Product Price After Discount</label>
                            <input type="text" class="form-control" id="priceOnDiscount" name="priceOnDiscount"
                                   placeholder="Enter Product Price After Discount"
                                   value="{{$product->price_after_discount}}">
                        </div>

                        <div class="form-group">
                            <label for="image">Product Image</label>
                            <input type="file" class="form-control" id="image" name="image"
                                   placeholder="Select Product Image"
                            <!-- TODO: value here -->
                        </div>

                        <div class="form-group">
                            <label for="storeID">Store Name</label><br>
                            <select name="storeID" class="form-select h-100 w-100 ">
                                <option></option>
                                <!-- TODO: selection of the option with the product id-->
                                @foreach($stores as $store)
                                    @if($product->id)
                                        <option selected value="{{$store->id}}">{{$store->name}}</option>
                                    @else
                                        <option value="{{$store->id}}">{{$store->name}}</option>
                                    @endif
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
