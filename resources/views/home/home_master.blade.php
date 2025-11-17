<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>{{  __('DnvMaster - ИТ решения и технологии') }}</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="shortcut icon" href="{{ asset('frontend//images/favicon.ico') }}" type="image/x-icon">
      <link rel="icon" href="{{ asset('frontend//images/favicon.ico') }}" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/remixicon.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/niceselect.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/app.min.css') }}">
    </head>
    <body>
      <div class="preloader">
        <div class="preloader-inner">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

    <div class="progress-bar-container">
      <div class="progress-bar"></div>
    </div>

    <div class="paginacontainer">
      <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
        <div class="top-arrow">
          <svg width="12" height="20" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.999999 1L8 8L1 15" stroke="#142D6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </div>
    </div>

    @include('home.body.mobile_menu')
  
    @include('home.body.header')

    @yield('home')

    @include('home.body.footer')

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/menu/menu.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/pricing.min.js') }}"></script>
    <script src="{{ asset('frontend/js/countdown.js') }}"></script>
    <script src="{{ asset('frontend/js/skillbar.js') }}"></script>
    <script src="{{ asset('frontend/js/slick-animation.js') }}"></script>
    <script src="{{ asset('frontend/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('frontend/js/faq.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/tabs-slider.js') }}"></script>
    <script src="{{ asset('frontend/js/product-increment.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/niceselect.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/app.js')}}"></script>
  </body>
</html>