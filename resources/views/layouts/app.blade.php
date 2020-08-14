<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HappyTours.store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('index/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('index/css/style.css') }}">

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">Happytours</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          {{-- <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="tour.html" class="nav-link">Tour</a></li>
          <li class="nav-item"><a href="hotel.html" class="nav-link">Hotels</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --}}
          <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->

    @yield('content')

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">HappyTours</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Information</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">About</a></li>
              <li><a href="#" class="py-2 d-block">Service</a></li>
              <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
              <li><a href="#" class="py-2 d-block">Become a partner</a></li>
              <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
              <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Customer Support</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">FAQ</a></li>
              <li><a href="#" class="py-2 d-block">Payment Option</a></li>
              <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
              <li><a href="#" class="py-2 d-block">How it works</a></li>
              <li><a href="#" class="py-2 d-block">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
          	<h2 class="ftco-heading-2">Have a Questions?</h2>
          	<div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Daffodil International University,Dhanmondi,Dhaka,Bangladesh.</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">


        </div>
      </div>
    </div>
  </footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
{{-- <script src="{{ asset('index/js/jquery.timepicker.min.js') }}"></script> --}}
<script src="{{ asset('index/js/scrollax.min.js') }}"></script>

{{-- <script src="{{ asset('index/js/google-map.js') }}"></script> --}}
<script src="{{ asset('index/js/main.js') }}"></script>

</body>
</html>
