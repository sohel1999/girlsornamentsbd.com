@extends('backend.Layouts.master')

@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Brand</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="breadcrumb-link">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Brand List</li>
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
                                <th>Start date</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands  as $brand)
                                <tr>
                                    <td>{{$brand->name}}</td>
                                    <td>
                                        <img class="avatar" src="{{ asset('upload/brand/'.$brand->image)}}" alt="">
                                    </td>
                                    <td>{{$brand->created_at->format('Y/m/d')}}</td>
                                    <td>
                                        @if($brand->status === true)
                                            <span class="badge badge-success">active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif

                                    </td>
                                    <td>
                                     <div class="d-flex">
                                         <div>
                                             <form action="{{route('brands.destroy',$brand->id)}}" method="post">
                                                 @method('DELETE')
                                                 @csrf
                                                 <button class="border-0 btn btn-dark">Delete</button>
                                             </form>
                                         </div>
                                         <div class="ml-3">
                                             <a class="btn btn-primary" href="{{route('brands.edit',$brand->id)}}">Edit</a>
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
