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
                            <li class="breadcrumb-item active" aria-current="page">Admin Create</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Admin Form</h5>
                <div class="card-body">
                    <form action="{{route('admins.store')}}" method="post" id="basicform" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputUserName">Name</label>
                            <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter brand title" autocomplete="off" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="inputUserName">Email</label>
                            <input id="inputUserName" type="text" name="email" data-parsley-trigger="change" required="" placeholder="Enter brand title" autocomplete="off" class="form-control">
                        </div>
                          <div class="form-group">
                            <label for="inputUserName">Password</label>
                            <input id="inputUserName" type="password" name="password" data-parsley-trigger="change" required="" placeholder="Enter brand title" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputUserName">Profile</label>
                            <input id="inputUserName"  type="file" name="profile" data-parsley-trigger="change" required="" placeholder="Enter Product Title" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                <label class="be-checkbox custom-control custom-checkbox">
                                    <input name="status" value="1" checked type="checkbox" class="custom-control-input"><span class="custom-control-label">active</span>
                                </label>
                            </div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    <a href="{{route('admins.index')}}" class="btn btn-space btn-secondary">Cancel</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
