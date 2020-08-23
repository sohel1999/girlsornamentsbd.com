<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/taj-preview/taj/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 19:25:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta lang="{{config('app.locale')}}">
    <title> @yield('title','home')|| {{config('app.name')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/meanmenu.min.css">
    <!-- Font-Awesome css -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/font-awesome.min.css">
    <!-- Flaticon css -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/flaticon.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/venobox/venobox.css" type="text/css" media="screen" />
    <!-- nivo slider css -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('/frontend')}}/lib/css/preview.css" type="text/css" media="screen" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.carousel.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{asset('/frontend')}}/js/vendor/modernizr-2.8.3.min.js"></script>
    @notifyCss
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<!--Header Area Start-->
@include('frontend.partials.header')
<!--Header Area End-->
<!-- Mobile Menu Start -->
@include('frontend.partials.mobile-menu')
<!-- Mobile Menu End -->
<!-- slider Area Start -->

<!-- slider Area End-->
@yield('main')
<!-- Brand Area End -->
<!-- Footer Area Start -->
@include('frontend.partials.footer')
<!--End of Quickview Product-->
<!-- all js here -->
<!-- jquery latest version -->
<script src="{{asset('/frontend')}}/js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="{{asset('/frontend')}}/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="{{asset('/frontend')}}/js/owl.carousel.min.js"></script>
<!-- jquery-ui js -->
<script src="{{asset('/frontend')}}/js/jquery-ui.min.js"></script>
<!-- jquery countdown js -->
<script src="{{asset('/frontend')}}/js/jquery.countdown.min.js"></script>
<!-- jquery countdown js -->
<script type="text/javascript" src="{{asset('/frontend')}}/venobox/venobox.min.js"></script>
<!-- jquery Meanmenu js -->
<script src="{{asset('/frontend')}}/js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="{{asset('/frontend')}}/js/wow.min.js"></script>
<!-- scrollUp JS -->
<script src="{{asset('/frontend')}}/js/jquery.scrollUp.min.js"></script>
<!-- plugins js -->
<script src="{{asset('/frontend')}}/js/plugins.js"></script>
<!-- Nivo slider js -->
<script src="{{asset('/frontend')}}/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="{{asset('/frontend')}}/lib/home.js" type="text/javascript"></script>
<!-- main js -->
<script src="{{asset('/frontend')}}/js/main.js"></script>
@include('notify::messages')
@notifyJs
</body>

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/taj-preview/taj/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 19:26:21 GMT -->
</html>
