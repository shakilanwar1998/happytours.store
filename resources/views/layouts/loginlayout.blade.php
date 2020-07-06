<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HappyTours.store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/main.css')}}">


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('index/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/style.css') }}">


  </head>
  <body>

<div class="limiter">
    <div class="hero-wrap js-fullheight" style="background-image: url({{asset('index/images/bg_1.jpg')}})">
      <div class="wrap-login100 p-t-0 p-b-30" style="margin-left:40%;">

      @yield('content')

      </div>
    </div>
</div>


<script src="{{asset('frontend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('frontend/vendor/animsition/js/animsition.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('frontend/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('frontend/vendor/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('frontend/vendor/countdowntime/countdowntime.js')}}"></script>

<script src="{{ asset('index/js/jquery.min.js') }}"></script>
<script src="{{ asset('index/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('index/js/popper.min.js') }}"></script>
<script src="{{ asset('index/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('index/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('index/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('index/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('index/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('index/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('index/js/aos.js') }}"></script>
<script src="{{ asset('index/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('index/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('index/js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('index/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('index/js/google-map.js') }}"></script>
<script src="{{ asset('index/js/main.js') }}"></script>

</body>
</html>
