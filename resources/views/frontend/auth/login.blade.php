@extends('frontend.Layouts.master')

@section('main')
    <div class="breadcrumbs-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Login / Create An Account</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="login-account-area section-padding">
        <div class="container">
            <div class="row">
                <div class="account-details">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <form method="post" class="create-account-form" action="{{route('auth.register')}}">
                            @csrf
                            <h1 class="heading-title">Create an account</h1>
                            <div class="form-row">
                                <label>Full name</label>
                                <input type="text" name="name">
                            </div>
                            <div class="form-row">
                                <label>Phone</label>
                                <input type="text" name="phone">
                            </div>
                            <div class="form-row">
                                <label>Email address</label>
                                <input type="email" name="email">
                            </div>
                            <div class="form-row">
                                <label>Password</label>
                                <input type="password" name="password">
                            </div>
                            <div class="form-row">
                                <label> address</label>
                                <textarea class="form-control" name="address"> </textarea>
                            </div>
                            <div class="submit">
                                <button name="submitcreate" id="submitcreate" type="submit" class="">
										<span>
											<i class="fa fa-user left"></i>
											Create an account
										</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <form method="post" class="login-form" action="{{route('login.process')}}">
                            @csrf
                            <h1 class="heading-title">Already registered?</h1>
                            <p class="form-row">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email') <sapn class="text-danger">{{$message}}</sapn> @enderror
                            </p>
                            <p class="form-row">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password') <sapn class="text-danger">{{$message}}</sapn> @enderror
                            </p>
                            <p class="lost-password form-group"><a rel="nofollow" href="#">Forgot your password?</a></p>
                            <div class="submit">
                                <button name="submitcreate2" id="submitcreate2" type="submit" class="">
                                    <span><i class="fa fa-lock"></i>Sign In</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
