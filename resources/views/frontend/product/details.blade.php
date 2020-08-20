@extends('frontend.Layouts.master')

@section('title') Product Details @endsection

@section('main')
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area2 section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>PRODUCT DTAILS</h2>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<!-- Product Simple Area Start -->
<div class="product-simple-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <div class="single-product-image-inner">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        @foreach(json_decode($product->images) as $key=>$image)

                        <div role="tabpanel" class="tab-pane {{$loop->first ? 'active':''}}" id="one-{{$key}}">
                            <a class="venobox" href="{{asset('upload/product/'.$image)}}" data-gall="gallery" title="">
                                <img src="{{asset('upload/product/'.$image)}}" alt="">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <!-- Nav tabs -->
                    <ul class="product-tabs" role="tablist">
                        @foreach(json_decode($product->images) as $key=>$image)
                        <li role="presentation" class="{{$loop->first ? 'active' :''}}" style="border-radius: 10px; overflow: hidden;">
                            <a href="#one-{{$key}}" aria-controls=" one" role="tab" data-toggle="tab">
                                <img src="{{asset('upload/product/'.$image)}}" alt="" style="width: 150px; height: 120px; object-fit: cover;"></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-offset-1 col-md-5 col-sm-5">
                <div class="single-product-details">
                    <div class="list-pro-rating">
                        <i class="fa fa-star icolor"></i>
                        <i class="fa fa-star icolor"></i>
                        <i class="fa fa-star icolor"></i>
                        <i class="fa fa-star icolor"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h2>{{$product->name}}</h2>
                    @if($product->isStock())
                    <h4>in stock</h4>
                    @else
                    <h4>out stock</h4>
                    @endif
                    <p>{!! $product->description!!}</p>
                    <div class="single-product-price">
                        <h2>BDT {{$product->price}}</h2>
                    </div>
                    <p class="single-shop-select">
                        <label>color</label>
                        <select>
                            <option>Black</option>
                            <option>White</option>
                            <option>Gold</option>
                        </select>
                    </p>
                    <p class="single-shop-select">
                        <label>Size</label>
                        <select>
                            <option>S</option>
                            <option>M</option>
                            <option>X</option>
                            <option>XL</option>
                            <option>2X</option>
                            <option>3X</option>
                        </select>
                    </p>
                    <div class="product-attributes clearfix">
                        <span class="pull-left" id="quantity-wanted-p">
                            <span class="dec qtybutton">-</span>
                            <input type="text" value="1" class="cart-plus-minus-box">
                            <span class="inc qtybutton">+</span>
                        </span>
                        <span>
                            <a class="cart-btn" href="cart.html">
                                <i class="flaticon-bag"></i>
                                <span>Add to Cart</span>
                            </a>
                        </span>
                    </div>
                    <div class="add-to-wishlist">
                        <a class="wish-btn" href="cart.html">
                            <i class="flaticon-favorite"></i>
                            <span>ADD TO WISHLIST</span>
                        </a>
                    </div>
                    <div id="product-comments-block-extra">
                        <ul class="comments-advices">
                            <li>
                                <a href="#" class="open-comment-form">Write a review</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="p-details-tab-content section-padding-2">
                    <div class="p-details-tab">
                        <ul class="p-details-nav-tab" role="tablist">
                            <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">Description</a></li>
                            <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Review</a></li>
                            <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Tab</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="tab-content review">
                        <div role="tabpanel" class="tab-pane active" id="more-info">
                            {!! $product->description!!}
                        </div>
                        <div role="tabpanel" class="tab-pane" id="data">
                            <table class="table-data-sheet">
                                <tbody>
                                    <tr class="odd">
                                        <td>Compositions</td>
                                        <td>Cotton</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Styles</td>
                                        <td>Casual</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Properties</td>
                                        <td>Short Sleeve</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="reviews">
                            <div id="product-comments-block-tab">
                                <a href="#" class="comment-btn"><span>Be the first to write your review!</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Simple Area End -->
<!--Related Product Area Start-->
<div class="featured-product-area section-padding-2">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Related products</h2>
            </div>
            <div class="featured-product-list indicator-style">
                @foreach($relateProducts as $releateProduct)
                <div class="col-md-3">
                    <div class="single-new-trend">
                        <a href="shop.html">
                            <img src="{{json_decode($releateProduct->images)[0]}}" alt="">
                        </a>
                        <div class="overlay-content">
                            <a href="shop.html">
                                <h2>BDT {{$releateProduct}}</h2>
                            </a>
                            <a href="shop.html" class="btn-small">Now</a>
                            <div class="product-action">
                                <ul>
                                    <li>
                                        <a href="#"><i class="flaticon-bag"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{route('shop.show', $releateProduct->id)}}"><i class="flaticon-view"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="shop.html">
                                <h4>{{$releateProduct->name}}</h4>
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
<!--Related Product Area End-->
<!-- Brand Area Start -->
<div class="brand-area section-padding-2">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>OUR BRANDS</h2>
            </div>
            <div class="brand-list indicator-style2">
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="img/brand/1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="img/brand/2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="img/brand/3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="img/brand/4.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="img/brand/5.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="img/brand/1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="img/brand/2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="img/brand/3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
