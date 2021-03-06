@extends('frontend.Layouts.master')

@section('main')
    @include('frontend.partials.slider')

    <!--New Product Area Start-->
    <div class="new-product-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="new-product-top">
                        @foreach($products as $product)
                        <div class="col-50 bg-brand  padding-right" style="padding-bottom: 10px;border-radius: 10px;">
                            <div class="single-top-product">
                                <img style="width: 100%; height: 100%;" src="{{asset('upload/product/'.json_decode($product->images)[0] ?? null)}}" alt="">
                                <div class="overlay-content">
                                    <a href="{{route('shop.show',$product->id) }}"><h3>{{ $product->name  }}</h3></a>
                                    <a href="{{route('addToCart',$product->id)}}" class="btn-product">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="new-trend section-padding">
                <div class="row">
                    <div class="section-title">
                        <h2>New Trend</h2>
                    </div>
                    <div class="new-trend-list indicator-style">
                        @foreach($trend_products as $tp)
                        <div class="col-md-4">
                            <div class="single-new-trend">
                                <a href="shop.html"><img src="{{asset('upload/product/'.json_decode($tp->images)[0] ?? null)}}" alt=""></a>
                                <div class="overlay-content">
                                    <a href="{{route('shop.show',$tp->id)}}"><h2>{{$tp->price}}BDT</h2></a>
                                    <a href="{{route('addToCart',$tp->id)}}" class="btn-small">Now</a>
                                    <div class="product-action">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="flaticon-bag"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="flaticon-view"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="shop.html">
                                        <h4>{{$tp->name}}</h4>
                                    </a>
                                    <div class="pro-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Area End -->
    <!-- New Product Area Start -->
    <div class="new-collection-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="new-collection-info">
                        <h2>New Collection !!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <a href="#" class="btn-default">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Area End -->
    <!--Featured Product Area Start-->
    <div class="featured-product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Featured Products</h2>
                </div>
                <div class="featured-product-list indicator-style">
                    <div class="col-md-3">
                        <div class="single-new-trend">
                            <a href="shop.html"><img src="{{asset('/frontend')}}/img/featured/1.jpg" alt=""></a>
                            <div class="overlay-content">
                                <a href="shop.html"><h2>$200</h2></a>
                                <a href="shop.html" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="flaticon-view"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="shop.html">
                                    <h4>Freederica </h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-new-trend">
                            <a href="shop.html"><img src="{{asset('/frontend')}}/img/featured/2.jpg" alt=""></a>
                            <div class="overlay-content">
                                <a href="shop.html"><h2>$250</h2></a>
                                <a href="shop.html" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="flaticon-view"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="shop.html">
                                    <h4>Freederica </h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-new-trend">
                            <a href="shop.html"><img src="{{asset('/frontend')}}/img/featured/3.jpg" alt=""></a>
                            <div class="overlay-content">
                                <a href="shop.html"><h2>$280</h2></a>
                                <a href="shop.html" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="flaticon-view"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="shop.html">
                                    <h4>Freederica</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-new-trend">
                            <a href="shop.html"><img src="{{asset('/frontend')}}/img/featured/4.jpg" alt=""></a>
                            <div class="overlay-content">
                                <a href="shop.html"><h2>$230</h2></a>
                                <a href="shop.html" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="flaticon-view"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="shop.html">
                                    <h4>Freederica</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-new-trend">
                            <a href="shop.html"><img src="{{asset('/frontend')}}/img/featured/1.jpg" alt=""></a>
                            <div class="overlay-content">
                                <a href="shop.html"><h2>$200</h2></a>
                                <a href="shop.html" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="flaticon-view"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="shop.html">
                                    <h4>Freederica </h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-new-trend">
                            <a href="shop.html"><img src="{{asset('/frontend')}}/img/featured/2.jpg" alt=""></a>
                            <div class="overlay-content">
                                <a href="shop.html"><h2>$250</h2></a>
                                <a href="shop.html" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="flaticon-view"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="shop.html">
                                    <h4>Freederica </h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-new-trend">
                            <a href="shop.html"><img src="{{asset('/frontend')}}/img/featured/3.jpg" alt=""></a>
                            <div class="overlay-content">
                                <a href="shop.html"><h2>$280</h2></a>
                                <a href="shop.html" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="flaticon-view"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="shop.html">
                                    <h4>Freederica</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Featured Product Area End-->
    <!--Testimonial Area Start-->
    <div class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="testimonial-list indicator-style-3">
                    <div class="single-testimonial">
                        <div class="col-md-offset-1 col-md-2 col-sm-2">
                            <div class="support-img">
                                <img src="{{asset('/frontend')}}/img/testimonial/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="testimonial-text">
                                <h2>What our client says</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#">ZENIFAR DUE</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="col-md-offset-1 col-md-2 col-sm-2">
                            <div class="support-img">
                                <img src="{{asset('/frontend')}}/img/testimonial/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="testimonial-text">
                                <h2>What our client says</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#">ZENIFAR DUE</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="col-md-offset-1 col-md-2 col-sm-2">
                            <div class="support-img">
                                <img src="{{asset('/frontend')}}/img/testimonial/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="testimonial-text">
                                <h2>What our client says</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#">ZENIFAR DUE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Testimonial Area End-->
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
