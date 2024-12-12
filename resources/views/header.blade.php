<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="">

    <!-- title -->
    <title>Deztyle</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset ('assets/img/logo/favicon.png') }}') }}">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/account.css') }}">

</head>


 <!-- header area -->
 <header class="header">

<!-- header top -->
<div class="header-top">
    <div class="container">
        <div class="header-top-wrapper">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-5">
                    <div class="header-top-left">
                        <ul class="header-top-list">
                            <li><a href="https://live.themewild.com/cdn-cgi/l/email-protection#046d6a626b44617c65697468612a676b69"><i class="far fa-envelopes"></i>
                                    <span class="__cf_email__" data-cfemail="b8d1d6ded7f8ddc0d9d5c8d4dd96dbd7d5">[email&#160;protected]</span></a></li>
                            <li><a href="tel:+21236547898"><i class="far fa-headset"></i> +2 123 654 7898</a>
                            </li>
                            <li class="help"><a href="#"><i class="far fa-comment-question"></i> Need Help?</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-7">
                    <div class="header-top-right">
                        <ul class="header-top-list">
                            <!-- <li><a href="#"><i class="far fa-sign-in"></i> Login</a></li> -->
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="far fa-usd"></i> USD
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">USD</a>
                                        <a class="dropdown-item" href="#">EUR</a>
                                        <a class="dropdown-item" href="#">AUD</a>
                                        <a class="dropdown-item" href="#">CUD</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="far fa-globe-americas"></i> EN
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">EN</a>
                                        <a class="dropdown-item" href="#">FR</a>
                                        <a class="dropdown-item" href="#">DE</a>
                                        <a class="dropdown-item" href="#">RU</a>
                                    </div>
                                </div>
                            </li>
                            <li class="social">
                                <div class="header-top-social">
                                    <span>Follow Us: </span>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header top end -->

<!-- navbar -->
<div class="main-navigation">
    <nav class="navbar navbar-expand-lg">
        <div class="container position-relative">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset ('assets/img/logo/logo.png') }}" alt="logo">
            </a>
            <div class="mobile-menu-right">
                <div class="mobile-menu-btn">
                    <a href="#" class="nav-right-link search-box-outer"><i class="far fa-search"></i></a>
                    <a href="wishlist.html" class="nav-right-link"><i
                            class="far fa-heart"></i><span>2</span></a>
                    <a href="shop-cart.html" class="nav-right-link"><i
                            class="far fa-shopping-bag"></i><span>5</span></a>
                </div>
                <div id="myAccountSection1" class="my-account">
                    <button id="accountBtn1" class="account-btn"><i
                    class="far fa-user"></i></button>
                    <ul id="accountLinks1" class="account-links hidden">
                        <li><a href="#profile">Profile</a></li>
                        <li><a href="#orders">My Orders</a></li>
                        <li><a href="#billing">Billing</a></li>
                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                    aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
            </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a href="index.html" class="offcanvas-brand" id="offcanvasNavbarLabel">
                        <img src="{{ asset ('assets/img/logo/logo.png') }}" alt="">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center   flex-grow-1 pe-lg-5">
                        <li class="nav-item dropdown">
                        <!-- dropdown-toggle -->
                            <a class="nav-link  active" href="#"
                                data-bs-toggle="dropdown">Home</a>
                          
                        </li>
                        
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" data-bs-toggle="dropdown">Shop</a>
                            
                        </li>
                       
                    </ul>
                    @if(auth()->check())
                        <div id="myAccountSection2" class="my-account">
                            <button id="accountBtn2" class="account-btn">{{ Auth::user()->name }}</button>
                            <ul id="accountLinks2" class="account-links hidden">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">Billing</a></li>
                                <li><a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                    <!-- nav-right -->
                    <div class="nav-right">
                        <ul class="nav-right-list">
                            <li>
                                <a href="#" class="list-link search-box-outer">
                                    <i class="far fa-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('wishlist')}}" class="list-link">
                                    <i class="far fa-heart"></i><span>2</span>
                                </a>
                            </li>
                            @php
$cart = session('cart', []);
$total = array_reduce($cart, function ($carry, $item) {
    return $carry + ($item['price'] * $item['quantity']);
}, 0);
@endphp

<li class="dropdown-cart">
    <a href="#" class="list-link shop-cart">
        <i class="far fa-shopping-bag"></i><span>{{ count($cart) }}</span>
    </a>
    <div class="dropdown-cart-menu">
        <div class="dropdown-cart-header">
            <span>{{ count($cart) }} Items</span>
            <a href="{{ route('cart') }}">View Cart</a>
        </div>
        <ul class="dropdown-cart-list">
            @foreach ($cart as $id => $item)
                <li>
                    <div class="dropdown-cart-item">
                        <div class="cart-img">
                            <a href="#"><img src="{{ asset($item['image']) }}" alt="#"></a>
                        </div>
                        <div class="cart-info">
                            <h4><a href="#">{{ $item['name'] }}</a></h4> <!-- This is the product title -->
                            <p class="cart-qty">{{ $item['quantity'] }}x - 
                                <span class="cart-amount">${{ $item['price'] * $item['quantity'] }}</span>
                            </p>
                        </div>
                        <a href="#" class="cart-remove" title="Remove this item"><i class="far fa-times-circle"></i></a>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="dropdown-cart-bottom">
            <div class="dropdown-cart-total">
                <span>Total</span>
                <span class="total-amount">${{ $total }}</span>
            </div>
            <a href="{{ route('checkout') }}" class="theme-btn">Checkout</a>
        </div>
    </div>
</li>
                 </ul>
                    </div>
                    @else
                    <div  class="my-account">
                        <a href="{{route('login')}}">
                            <button class="account-btn">Login</button>
                        </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- navbar end -->

</header>
<!-- header area end -->

