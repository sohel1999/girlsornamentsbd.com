
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}|Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/backend')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{asset('/backend')}}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/backend')}}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{asset('/backend')}}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

    </style>
    @notifyCss
</head>

<body>
<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center">
            <a href="{{route('home')}}" class="text-primary text-capitalize font-24">
                {{config('app.name')}}
            </a>
            <span class="splash-description">Please enter your user information.</span></div>
        <div class="card-body">
            <form method="post" action="{{route('login.process')}}">
                @csrf
                <div class="form-group">
                    <input class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" id="username" type="text" placeholder="Email" autocomplete="off">
                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" id="password" type="password" placeholder="Password">
                    @error('password') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
        <div class="card-footer bg-white p-0  ">
            <div class="card-footer-item card-footer-item-bordered">

            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Forgot Password</a>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="{{asset('/backend')}}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="{{asset('/backend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    @include('notify::messages')
    @notifyJs
</body>

</html>
