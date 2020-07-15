@extends('frontend.Layouts.master')

@section('main')
    <div class="breadcrumbs-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Cart List</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Area End -->
    <!--Cart Page Area Start-->
    <div class="shopping-cart-area bg-white section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wishlist-table-area table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-remove">Remove</th>
                                <th class="product-image">Image</th>
                                <th class="t-product-name">Product Name</th>
                                <th class="product-edit">Edit</th>
                                <th class="product-unit-price">Unit Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="product-remove">
                                    <a href="#">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                                <td class="product-image">
                                    <a href="#">
                                        <img src="img/product/1.jpg" alt="">
                                    </a>
                                </td>
                                <td class="t-product-name">
                                    <h3>
                                        <a href="#">Skerts Dress</a>
                                    </h3>
                                </td>
                                <td class="product-edit">
                                    <p>
                                        <a href="#">Edit</a>
                                    </p>
                                </td>
                                <td class="product-unit-price">
                                    <p>$ 100</p>
                                </td>
                                <td class="product-quantity product-cart-details">
                                    <input type="number" value="1">
                                </td>
                                <td class="product-quantity">
                                    <p>$ 100</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-remove">
                                    <a href="#">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                                <td class="product-image">
                                    <a href="#">
                                        <img src="img/product/2.jpg" alt="">
                                    </a>
                                </td>
                                <td class="t-product-name">
                                    <h3>
                                        <a href="#">Skerts Dress</a>
                                    </h3>
                                </td>
                                <td class="product-edit">
                                    <p>
                                        <a href="#">Edit</a>
                                    </p>
                                </td>
                                <td class="product-unit-price">
                                    <p>$ 100</p>
                                </td>
                                <td class="product-quantity product-cart-details">
                                    <input type="number" value="1">
                                </td>
                                <td class="product-quantity">
                                    <p>$ 100</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="shopingcart-bottom-area">
                        <a class="left-shoping-cart" href="{{route('shop.index')}}">CONTINUE SHOPPING</a>
                        <div class="shopingcart-bottom-area pull-right">
                            <a class="right-shoping-cart" href="#">CLEAR SHOPPING CART</a>
                            <a class="right-shoping-cart" href="#">UPDATE SHOPPING CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Cart Page Area End-->
    <!-- Discount Area Start -->
    <div class="discount-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="subtotal-main-area">
                        <div class="subtotal-area">
                            <h2>SUBTOTAL<span>$ 200</span></h2>
                        </div>
                        <div class="subtotal-area">
                            <h2>GRAND TOTAL<span>$ 200</span></h2>
                        </div>
                        <a href="#">CHECKOUT</a>
                        <p>Checkout With Multiple Addresses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
