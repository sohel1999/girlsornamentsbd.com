<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hidden-xs">
                    <div class="header-top-message pull-left">
                        <span><i class="fa fa-envelope"></i>support@devitems.com</span>
                        <span><i class="fa fa-phone"></i>+8801737 803547</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-top-menu pull-right">
                        <ul class="nav-menu">
                            @auth()
                            <li><a href="{{route('logout')}}">Logout</a></li>
                            @endauth
                            @guest()
                            <li><a href="{{route('auth.index')}}">LOGIN</a></li>
                            @endguest
                            <li><a href="#">LANGLUAGE</a>
                                <div class="ht-menu-down">
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Bangla</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">BDT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-2 col-xs-6">
                    <div class="header-logo">
                        <a href="{{route('home')}}" class="bg-primary" style="padding: 10px; border-radius: 4px; font-weight: 900;">
                            {{config('app.name')}}
                        </a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-9 hidden-xs">
                    <div class="mainmenu text-center">
                        <nav>
                            <ul id="nav">
                                <li><a href="{{route('home')}}">HOME</a></li>
                                <li><a href="{{route('shop.index')}}">SHOP</a></li>
                                <li><a href="shop.html">COLLECTION</a></li>
                                <li><a href="#">Categories</a>
                                    <ul class="sub-menu">
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="shop.html">Shopping Page</a></li>
                                        <li><a href="single-product.html">Single Shop Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-6">
                    <div class="header-cart pull-right">
                        <ul>
                            <li>
                                <a class="header-cart-link" href="#">
                                    <i class="flaticon-bag"></i>
                                    <span>{{session('cart') ? count(session('cart')) : 0}}</span>
                                </a>
                                <div class="cart_down_area">

                                    @forelse(session('cart') ?? [] as $item)
                                    <div class="cart_single">
                                        <a href="#">
                                            <img src="{{asset('/frontend')}}/img/product/c-1.jpg" alt="">
                                        </a>
                                        <h2>
                                            <a href="#">{{$item['name']}}</a>
                                            <a href="#">
                                                <span><i class="fa fa-trash"></i></span>
                                            </a>
                                        </h2>
                                        <p>{{$item['quantity']}} x {{$item['price']}}</p>
                                    </div>
                                    @empty
                                    <p>
                                        Cart Empty
                                    </p>
                                    @endforelse
                                    <div class="cart_shoptings">
                                        <a href="{{route('checkout')}}">Checkout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
