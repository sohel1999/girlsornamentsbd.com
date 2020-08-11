@extends('frontend.Layouts.master')

@section('main')
    <!-- Shop Page Area Start -->
    <div class="shop-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="shop-widget">
                        <aside class="widget widget-categories">
                            <h2 class="sidebar-title">CATEGORY</h2>
                            <ul class="sidebar-menu">

                                @foreach($categories as $category)
                                    <li>
                                        <a href="#">
                                            {{$category->name}}
                                            <span>({{$category->products_count}})</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="shop-right-area">
                        <div class="shop-tab-list">
                            <div class="shop-left-tab">
                                <div class="shop-tab-pill pull-left">
                                    <ul>
                                        <li class="active" id="left"><a data-toggle="pill" href="#home"><i
                                                    class="fa fa-th"></i><span></span></a></li>
                                        <li><a data-toggle="pill" href="#menu1"><i
                                                    class="fa fa-th-list"></i><span></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop-tab-pill pull-right">
                                    <ul>
                                        <li class="product-size-deatils">
                                            <div class="show-label">
                                                <label>Sort by : </label>
                                                <select>
                                                    <option value="position" selected="selected">Position</option>
                                                    <option value="Name">Name</option>
                                                    <option value="Price">Price</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="product-size-deatils">
                                            <div class="show-label">
                                                <label>Show : </label>
                                                <select>
                                                    <option value="10" selected="selected">10</option>
                                                    <option value="09">09</option>
                                                    <option value="08">08</option>
                                                    <option value="07">07</option>
                                                    <option value="06">06</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-tab-pill pull-right">
                                {{$products->links()}}
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="row tab-pane fade in active" id="home">
                                <div class="shop-single-product-area">
                                    @foreach($products as $product)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="single-product">
                                                <a href="single-product.html">
                                                    <img src="{{json_decode($product->images)[0]}}" alt="">
                                                </a>
                                                <div class="single-product-overlay sale">
                                                    <h3>sale</h3>
                                                </div>
                                                <div class="single-product-content">
                                                    <div class="left-content pull-left">
                                                        <a href="{{route('addToCart',$product->id)}}"><h2>STERLING
                                                                SILVER</h2></a>
                                                        <span class="new-price">$360.00</span>
                                                    </div>
                                                    <div class="right-content pull-right">
                                                        <a href="{{route('addToCart',$product->id)}}"><i
                                                                class="flaticon-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="row">
                                    @foreach($products as $product)
                                        <div class="col-md-12">
                                            <div class="shop-list-single">
                                                <div class="shop-list-left">
                                                    <a href="#">
                                                        <img style="width: 300px; height: 300px; object-fit: cover"
                                                             class="media-object"
                                                             src="{{json_decode($product->images)[0]}}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="shop-list-right">
                                                    <div class="left-content">
                                                        <a href="#"><h2>STERLING SILVER</h2></a>
                                                        <span class="new-price">$360.00</span>
                                                    </div>
                                                    <div class="list-pro-rating">
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                            fringilla augue nec est tristique auctor. Donec non est at
                                                            libero vulputate rutrum. Morbi ornare lectus quis justo
                                                            gravida semper. Nulla tellus mi, vulputate adipiscing cursus
                                                            eu, suscipit id nulla.Morbi ornare lectus quis justo gravida
                                                            semper.</p>
                                                        <p>Morbi ornare lectus quis justo gravida semper. Nulla tellus
                                                            mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                                    </div>
                                                    <a class="btn-default" href="#">SHOP NOW</a>
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
    </div>
    <!-- Shop Page Area End -->
    <!-- Brand Area Start -->
    <div class="brand-area section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>OUR BRANDS</h2>
                </div>
                <div class="brand-list indicator-style2">
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{asset('/frontend')}}/img/brand/1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{asset('/frontend')}}/img/brand/2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{asset('/frontend')}}/img/brand/3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{asset('/frontend')}}/img/brand/4.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{asset('/frontend')}}/img/brand/5.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{asset('/frontend')}}/img/brand/1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{asset('/frontend')}}/img/brand/2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{asset('/frontend')}}/img/brand/3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
