<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Setakarim</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="SetaKarim" />

        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!--Bootstrap Css-->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- Materialdesign icons Css -->
        <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}">

        <!-- Mobirise icons Css -->
        <link rel="stylesheet" href="{{ asset('css/mobiriseicons.css') }}">

        <!-- Magnific-popup -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

        <!-- Animate Css -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

        <!-- Owl Slider -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">

        <!-- Custom style Css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>

    <body>

        <!-- START LOADER -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">Loading...</div>
            </div>
        </div>
        <!-- END LOADER -->

        @yield('content')
        @include('patrials.footer')

        <!-- BACK TO TOP -->
        <a href="#" class="back_top"> <i class="mbri-arrow-up"> </i> </a>


        <!-- JAVASCRIPTS -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        
        <!--EASING JS-->
        <script type="text/javascript" src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/scrollspy.min.js') }}"></script>
        <!-- TYPED -->
        <script type="text/javascript" src="{{ asset('js/typed.js') }}"></script>
        <!-- MFP JS -->
        <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

        <!--PORTFOLIO FILTER JS-->
        <script type="text/javascript" src="{{ asset('js/isotope.js') }}"></script>
        <!-- OWL CAROUSEL -->
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!--CUSTOM JS-->
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

        <script type="text/javascript">
            $(".element").each(function () {
            var $this = $(this);
                $this.typed({
                    strings: $this.attr('data-elements').split(','),
                    typeSpeed: 100,
                    backDelay: 3000
                });
            });
        </script>
    </body>
</html>