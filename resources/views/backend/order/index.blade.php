@extends('backend.Layouts.master')

@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Category</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="breadcrumb-link">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Category List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Order List</h5>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>Invoice No</th>
                                <th>Customer</th>
                                <th>cus_phone</th>
                                <th>total</th>
                                <th>shipped_at</th>
                                <th>Crated_at</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders  as $order)
                                <tr>
                                    <td>{{$order->order_number}}</td>
                                    <td>{{$order->cus_name}}</td>
                                    <td>{{$order->cus_phone}}</td>
                                    <td>{{$order->total}}</td>
                                    <td>{{$order->shipped_at}}</td>
                                    <td>{{$order->created_at->format('Y/m/d')}}</td>
                                    <td>
                                        @if(array_key_exists($order->status,$status))
                                          <p class="d-flex align-items-center">
                                              <span style="width: 8px; height: 8px;" class="{{$status[$order->status]}} flex-shrink-0 flex-grow-0"></span>
                                              <span>{{$order->status}}</span>
                                          </p>
                                        @endif
                                    </td>
                                    <td>

                                        <div class="dropdown">
                                            <button class="btn btn-dark" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dLabel">
                                                <a class="btn" href="{{route('orders.show',$order->id)}}">Invoice</a>
                                                @foreach($status as $key=>$s)
                                                    <a class="btn" href="{{route('change.status',['id'=>$order->id,'status'=>$key])}}">
                                                        <span class="{{$s}}"></span>
                                                        {{$key}}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
