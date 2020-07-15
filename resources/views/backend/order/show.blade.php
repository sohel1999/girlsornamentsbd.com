@extends('backend.Layouts.master')

@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">E-commerce Product Invoice </h2>
                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">E-coommerce</a></li>
                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Product Invoice</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header p-4">
                    <a class="pt-2 d-inline-block" href="index.html">Concept</a>

                    <div class="float-right"> <h3 class="mb-0">#{{$order->order_number}}</h3>
                        Date: {{$order->created_at->format('d M , Y')}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h5 class="mb-3">From:</h5>
                            <h3 class="text-dark mb-1">Gerald A. Garcia</h3>

                            <div>2546 Penn Street</div>
                            <div>Sikeston, MO 63801</div>
                            <div>Email: info@gerald.com.pl</div>
                            <div>Phone: +573-282-9117</div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="mb-3">To:</h5>
                            <h3 class="text-dark mb-1">{{$order->cus_name}}</h3>
                            <div>{{$order->address}}</div>
                            <div>Email: {{$order->cus_email}}</div>
                            <div>Phone: {{$order->cus_phone}}</div>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                <th>Description</th>
                                <th class="right">Unit Cost</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($order->orderItems as $key=>$item)
                            <tr>
                                <td class="center">{{$key + 1}}</td>
                                <td class="left">{{$item->product->name}}</td>
                                <td class="left">{{$item->product->description}}</td>
                                <td class="right">${{$item->unit_price}}</td>
                                <td class="center">{{$item->quantity}}</td>
                                <td class="right">${{$item->line_total}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">
                        </div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Subtotal</strong>
                                    </td>
                                    <td class="right">$28,809,00</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Discount (20%)</strong>
                                    </td>
                                    <td class="right">$5,761,00</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">VAT (10%)</strong>
                                    </td>
                                    <td class="right">$2,304,00</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong class="text-dark">$20,744,00</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <p class="mb-0">2983 Glenview Drive Corpus Christi, TX 78476</p>
                </div>
            </div>
        </div>
    </div>
@endsection
