@extends('frontend.Layouts.master')

@section('main')
<div class="breadcrumbs-area2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Checkout List</h2>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<!--Check Out Area Start-->
<form method="POST" action="{{route('frontend.orders.create')}}">
    @csrf
    <div class="check-out-area">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>1</span>
                                        Billing Information
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="shop-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select name="country" class="@error('country') invalid @enderror">
                                                    <option value="volvo">Bangladesh</option>
                                                    <option value="saab">Algeria</option>
                                                    <option value="mercedes">Afghanistan</option>
                                                    <option value="audi">Ghana</option>
                                                    <option value="audi2">Albania</option>
                                                    <option value="audi3">Bahrain</option>
                                                    <option value="audi4">Colombia</option>
                                                    <option value="audi5">Dominican Republic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>First Name<span class="required">*</span></label>
                                                <input type="text" name="first_name">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Last Name<span class="required">*</span></label>
                                                <input type="text" name="last_name">
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <label>Address<span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" name="address">
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <label>Town / City<span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City" name="city">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Postcode / Zip<span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" name="postal_code">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Email Address<span class="required">*</span></label>
                                                <input type="text" name="email">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Phone<span class="required">*</span></label>
                                                <input type="text" placeholder="Phone" name="phone">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span>3</span>
                                        Payment Information
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body no-padding">
                                    <div class="payment-met">
                                        <form action="#" id="payment-form">
                                            <ul class="form-list">
                                                <li class="control" style="display: flex;">
                                                    <input type="radio" class="radio" title="Check / Money order" name="payment[method]" id="p_method_checkmo">
                                                    <label for="p_method_checkmo">Online Pay</label>
                                                </li>
                                                <li class="control" style="display: flex;">
                                                    <input type="radio" class="radio" title="Credit Card (saved)" name="payment[method]" id="p_method_ccsave">
                                                    <label for="p_method_ccsave">Cash on Delivery</label>
                                                </li>
                                            </ul>
                                        </form>
                                        <div class="buttons-set">
                                            <button class="btn btn-default">CONTINUE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span>2</span>
                                        Product Information
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body no-padding">
                                    <div class="order-review" id="checkout-review">
                                        <div class="table-responsive" id="checkout-review-table-wrapper">
                                            <table class="data-table" id="checkout-review-table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="1">Product Name</th>
                                                        <th colspan="1">Price</th>
                                                        <th rowspan="1">Qty</th>
                                                        <th colspan="1">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($carts as $cart)
                                                    <tr>
                                                        <td>
                                                            <h3 class="product-name">{{$cart['name']}}</h3>
                                                        </td>
                                                        <td><span class="cart-price"><span class="price">{{$cart['price']}}BDT</span></span></td>
                                                        <td>{{$cart['quantity']}}</td>
                                                        <!-- sub total starts here -->
                                                        <td><span class="cart-price"><span class="price">{{$cart['sub_total']}}</span></span></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="3">Subtotal</td>
                                                        <td><span class="price">{{$total}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Shipping Handling (Flat Rate - Fixed)</td>
                                                        <td><span class="price">60 BDT</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><strong>Grand Total</strong></td>
                                                        <td><strong><span class="price">{{$total + 60 }}BDT</span></strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div id="checkout-review-submit">
                                            <div class="cart-btn-3" id="review-buttons-container">
                                                <p class="left">Forgot an Item? <a href="#">Edit Your Cart</a></p>
                                                <button type="submit" title="Place Order" class="btn btn-default"><span>Place Order</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-4">
                    <div class="checkout-widget">
                        <h2 class="widget-title">YOUR CHECKOUT PROGRESS</h2>
                        <ul>
                            <li><a href="#"><i class="fa fa-minus"></i> Billing Address</a></li>
                            <li><a href="#"><i class="fa fa-minus"></i> Payment Method</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
