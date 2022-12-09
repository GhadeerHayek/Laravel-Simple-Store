<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{URL('/home')}}">Dashboard 1</a></li>
                </ul>
            </li>
            <!-- todo: insert links to different stores pages (add, delete, edit, view)-->
            <li class="nav-label">Modules</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Stores</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{URL('/stores')}}">All Stores </a></li>
                    <li><a href="{{URL('/stores/create')}}">Add Store </a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-cart-simple"></i><span class="nav-text">Products</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{URL('/products')}}">All Products </a></li>
                    <li><a href="{{URL('/products/create')}}">Add Product </a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-wallet-90"></i><span class="nav-text">Purchasing Transactions</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{URL('/transactions')}}">All Transactions </a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-wallet-90"></i><span class="nav-text">Account</span></a>
                <ul aria-expanded="false">
                    <li>
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest

                    </li>
                </ul>
            </li>

        </ul>
    </div>


</div>
