<div class="banner_bg_main">
    <div class="container">
        <div class="custom_menu d-flex flex-row-reverse">
            <ul>
                <li>
                    <button class="btn btn-secondary" type="button"><a href="{{URL('/login')}}">Admin Login</a>
                    </button>
                </li>
            </ul>
        </div>
        <!-- header top section start -->
        <!-- header top section start -->
        <!-- logo section start -->
        <div class="logo_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo"><a href="index.html"><img
                                    src="{{asset('website_assets/images/logo.png')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- logo section end -->
        <!-- header section start -->
        <div class="header_section">
            <div class="container">
                <div class="containt_main">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Stores
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <!-- TODO: list all available stores here-->
                        </div>
                    </div>
                    <div class="main">
                        <!-- Another variation with a button -->
                        <div class="input-group">
                            <!-- TODO: search for product functionality goes here.-->
                            <input type="text" class="form-control" placeholder="Search for product ... ">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button"
                                        style="background-color: #f26522; border-color:#f26522 ">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="header_box">
                        <!-- TODO: Localization functionality goes here -->
                        <div class="lang_box ">
                            <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                                <img src="{{asset('website_assets/images/flag-uk.png')}}" alt="flag" class="mr-2 "
                                     title="United Kingdom"> English <i class="fa fa-angle-down ml-2"
                                                                        aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu ">
                                <a href="#" class="dropdown-item">
                                    <img src="{{asset('website_assets/images/flag-france.png')}}" class="mr-2"
                                         alt="flag">
                                    French
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header section end -->
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Started <br>Your favourite shoping</h1>
                                    <div class="buynow_bt"><a href="#">Buy Now!</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Find Everything you want <br>Your favourite stores</h1>
                                    <div class="buynow_bt"><a href="#">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                                    <div class="buynow_bt"><a href="#">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
