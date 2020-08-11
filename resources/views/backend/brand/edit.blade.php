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
                            <li class="breadcrumb-item active" aria-current="page">Brand Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Brand Edit Form</h5>
                <div class="card-body">
                    <form action="{{route('brands.update',$brand->id)}}" method="post" id="basicform"
                          data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputUserName">Brand Title</label>
                            <input id="inputUserName" value="{{$brand->name}}" type="text" name="name"
                                   data-parsley-trigger="change" required="" placeholder="Enter brand title"
                                   autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputUserName">Brand Logo
                                <img class="avatar" src="{{asset('upload/brand/'.$brand->image)}}" alt="brand">
                            </label>
                            <input id="inputUserName" multiple type="file" name="image" data-parsley-trigger="change"
                                   required="" placeholder="Enter Product Title" autocomplete="off"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                      rows="3">{{$brand->description}}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                <label class="be-checkbox custom-control custom-checkbox">
                                    <input name="status" value="1"
                                           {{$brand->status=== true ?'checked':''}} type="checkbox"
                                           class="custom-control-input"><span class="custom-control-label">active</span>
                                </label>
                            </div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    <a href="{{route('brands.index')}}" class="btn btn-space btn-secondary">Cancel</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
