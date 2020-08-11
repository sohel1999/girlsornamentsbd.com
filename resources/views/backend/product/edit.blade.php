@extends('backend.Layouts.master')

@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Product</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="breadcrumb-link">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Product create</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Product Form</h5>
                <div class="card-body">
                    <form action="{{route('products.update',$product->id)}}" method="post" id="basicform" data-parsley-validate=""
                          novalidate="" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputUserName">Title</label>
                            <input value="{{$product->name}}" id="inputUserName" type="text" name="name"
                                   data-parsley-trigger="change" required="required"
                                   placeholder="Enter Product Title" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select id="category" class="form-control" name="category_id">
                                @foreach($categories as $cat)
                                    <option {{$product->brand_id === $cat->id ? 'selected':''}} value="{{$cat->id}}"> {{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category">Brand</label>
                            <select id="category" class="form-control" name="brand_id">
                                @foreach($brands as $b)
                                    <option
                                        {{$product->brand_id === $b->id ? 'selected':''}} value="{{$b->id}}"> {{$b->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName">Price</label>
                            <input value="{{ $product->price }}" id="inputUserName" type="number" name="price" data-parsley-trigger="change"
                                   required="required" placeholder="Enter Product price" autocomplete="off"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputUserName">Stock</label>
                            <input value="{{$product->stock}}" id="inputUserName" type="number" name="stock" data-parsley-trigger="change"
                                   required="required" placeholder="Enter stock" autocomplete="off"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputUserName">
                                Photo

                                <img class="w-25" src="{{asset('upload/product/'.json_decode($product->images)[0])}}"
                                     alt="image">
                            </label>
                            <input id="inputUserName" multiple type="file" name="photos[]" data-parsley-trigger="change"
                                   required="required" placeholder="Enter Product Title" autocomplete="off"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                      rows="3">{{$product->description}}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                <label class="be-checkbox custom-control custom-checkbox">
                                    <input name="status" value="1" {{$product->status == true ? 'checked':''}} type="checkbox" class="custom-control-input"><span
                                        class="custom-control-label">active</span>
                                </label>
                            </div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

