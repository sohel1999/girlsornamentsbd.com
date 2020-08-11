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
                                <th class="product-unit-price">Unit Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($carts as $item)
                                <tr>
                                    <td class="product-remove">
                                        <a href="#">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                    <td class="product-image">
                                        <a href="#">
                                            <img src="{{asset('upload/product/')}}" alt="">
                                        </a>
                                    </td>
                                    <td class="t-product-name">
                                        <h3>
                                            <a href="#">{{$item['name']}}</a>
                                        </h3>
                                    </td>
                                    <td class="product-unit-price">
                                        <p>$ {{$item["price"]}}</p>
                                    </td>
                                    <td class="product-quantity product-cart-details">
                                        <input id="cartUpdate" type="number" value="{{$item['quantity']}}" >
                                    </td>
                                    <td class="product-quantity">
                                        <p>
                                            {{$item['sub_total']}}
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="shopingcart-bottom-area">
                        <a class="left-shoping-cart" href="{{route('shop.index')}}">CONTINUE SHOPPING</a>
                        <div class="shopingcart-bottom-area pull-right">
                            <a class="right-shoping-cart" href="#">CLEAR SHOPPING CART</a>
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
                            <h2>GRAND TOTAL<span>$ {{$total}}</span></h2>
                        </div>
                        <a href="#">CHECKOUT</a>
                        <p>Checkout With Multiple Addresses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let cartUpdate = document.getElementById('cartUpdate');
        cartUpdate.addEventListener('change',function () {
            fetch('')
        })

    </script>
@endsection

