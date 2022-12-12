@extends('layouts.website_main_layout')
@section('MainSection')
<body>

<!-- page banner -->
<div class="banner_bg_main">
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
    <div class="header_section">
        <div class="container">
            <div class="row">
                <div class="containt_main">
                    <!-- Drop Down list recieves data from controllers-->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Shops
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach($stores as $store)
                                <a class="dropdown-item"
                                   href="{{URL('website/store/'.$store->id)}}">{{$store->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main">
                        <!-- Search Button that sends search keys to controller-->
                        <form action="{{URL('/website/search')}}" method ="get"}}">
                        @csrf
                        <div class="input-group">
                            <input name = "searchKey" type="text" class="form-control" placeholder="Search this site">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="submit"
                                        style="background-color: #f26522; border-color:#f26522 ">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- banner section start -->
    @include('includes.website_includes.BannerSlider')
    <!-- banner section end -->
</div>
<!-- banner bg main end -->
<!-- fashion section start -->
<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <h1 class="fashion_taital">{{$stores_products->name}}</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            @foreach($stores_products->product as $product)
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">{{$product->name}}</h4>
                                        <p class="price_text">Price <span style="color: #262626;">
                                            @if($product->is_discount == 1)
                                                    {{$product->price_after_discount}}
                                                @else
                                                    {{$product->price}}
                                                @endif
                                            $</span></p>
                                        <div class="tshirt_img"><img src="{{URL($product->image_url)}}"></div>
                                        <div class="btn_main">
                                            <!-- TODO: activate button functionality-->
                                            <div class="buy_bt"><a href="{{URL('/website/billing/'.$product->id)}}">Buy Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fashion section end -->
@endsection
