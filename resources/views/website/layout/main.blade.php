
<!doctype html>
<html @if(app()->getLocale() == "ar") lang='ar' dir='rtl' @else lang='en' dir='ltr' @endif>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        @if(app()->getLocale() == 'en')
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fonts/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        @else
        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fonts/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@800&display=swap" rel="stylesheet">
        <style>
            body, h1, h2, h3, h4, h5, h6, span, p, i, a, button, input, .nav-link{
                font-family: 'Tajawal', 'sans-serif' !important;
            }
        </style>
        @endif
		
		<title>{{ env('APP_NAME') }}</title>

        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->
        
        <!-- Start Header Area -->
        @include('website.layout.navbar')
        <!-- End Header Area -->

        <!-- Sidebar Modal -->
        @include('website.layout.sidebar-modal')
        <!-- End Sidebar Modal -->
        
        {{ $slot }}

        <!-- End Footer Area -->
        @include('website.layout.footer')
        <!-- End Footer Area -->  

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-s-line"></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Links of JS files -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script> 
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/fancybox.min.js') }}"></script>
        <script src="{{ asset('assets/js/tweenmax.min.js') }}"></script>
        <script src="{{ asset('assets/js/ScrollMagic.min.js') }}"></script>
        <script src="{{ asset('assets/js/animation.gsap.min.js') }}"></script>
        <script src="{{ asset('assets/js/debug.addIndicators.min.js') }}"></script>
        <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
        <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>