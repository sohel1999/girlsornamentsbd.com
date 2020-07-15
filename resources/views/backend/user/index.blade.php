@extends('backend.Layouts.master')

@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Admin</h2>
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
                    <h5 class="mb-0">Admin List</h5>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>image</th>
                                <th>email</th>
                                <th>verified</th>
                                <th>Start date</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users  as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <img class="avatar" src="{{$user->image}}" alt="">
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->email_verified_at !== null)
                                            <span class="badge badge-primary">Yes</span>
                                        @else
                                            <span class="badge badge-warning">No</span>
                                        @endif

                                    </td>
                                    <td>{{$user->created_at->format('Y/m/d')}}</td>
                                    <td>
                                        @if($user->status === true)
                                            <span class="badge badge-success">active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif

                                    </td>
                                    <td>
                                        <a class="btn btn-dark" href="{{route('brands.destroy',$user->id)}}">Delete</a>
                                        <a class="btn btn-primary" href="{{route('brands.edit',$user->id)}}">Edit</a>
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
