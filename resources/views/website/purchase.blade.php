@include('includes.website_includes.css_includes')
    <!DOCTYPE html>
<head>
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url({{URL('website_assets/images/shopping.jpg')}})

        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="custom_menu d-flex flex-row-reverse">
            <ul>
                <br>
                <Button class="btn btn-black"><a href="{{URL('/website/home')}}">Home</a></Button>
                <Button class="btn btn-black"><a href="{{URL('/login')}}">Admin login</a></Button>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <h1 class="fashion_taital" ><br>Billing<br></h1>
</div>
<div class="container-fluid ">
    <form method="post" action="{{URL('/website/confirm/'.$product->id)}}">
        @csrf
        <div class="mb-3">
            <div class="form-group">
                <label for="storeID">Store Name</label><br>
                <select name="storeID" class="form-control">
                    <option selected value="{{$product->store->id}}">{{$product->store->name}}</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="productID">Product Name</label><br>
            <select name="productID" class="form-control">
                <option selected value="{{$product->id}}">{{$product->name}}</option>
            </select>
        </div>

        <div class="form-group">
            <label for="price">Product Price</label><br>
            <input type="text" name="price" class="form-control"
                   value="@if($product->is_discount ==1) {{$product->price_after_discount}}@else{{$product->price}}@endif">
        </div>

        <button type="submit" class="btn btn-black btn-lg"><a>Submit</a></button>
    </form>
</div>
</body>
