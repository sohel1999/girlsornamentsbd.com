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
                    <h5 class="mb-0">Brand List</h5>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>image</th>
                                <th>category</th>
                                <th>brand</th>
                                <th>price</th>
                                <th>stock</th>
                                <th>Start date</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products  as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>
                                        <img class="avatar" src="{{$product->image}}" alt="">
                                    </td>
                                    <td>{{$product->category_id}}</td>
                                    <td>{{$product->brand_id}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->stock}}</td>
                                    <td>{{$product->created_at->format('Y/m/d')}}</td>
                                    <td>

                                        @if($product->status === true)
                                            <span class="badge badge-success">active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif

                                    </td>
                                    <td>
                                        <a class="btn btn-dark" href="{{route('brands.destroy',$product->id)}}">Delete</a>
                                        <a class="btn btn-primary" href="{{route('brands.edit',$product->id)}}">Edit</a>
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
