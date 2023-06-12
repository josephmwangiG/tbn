<!DOCTYPE html>
<html>

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="home,page">
    <title>TBN | Transformational Business Network</title>

    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/timepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">

    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- base color change -->
    @vite('resources/css/app.css')
</head>



<body>

    <!--====== Start Preloader ======-->
    <div class="preloader" style="display: none;">
        <div class="lds-ellipsis">
            <img class="lazy entered loaded" data-src="https://profilo.xyz/assets/front/img/60fba38c3e9e3.jpg"
                alt="" data-ll-status="loaded" src="https://profilo.xyz/assets/front/img/60fba38c3e9e3.jpg">
        </div>
    </div>
    <!--====== End Preloader ======-->

    <div id="app"></div>

    @vite('resources/js/app.js')
    <link href="{{ asset('js/modernizr.js') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery.js') }}" rel="stylesheet">
    <link href="{{ asset('js/plugin.js') }}" rel="stylesheet">
    <link href="{{ asset('js/enable-push.js') }}" rel="stylesheet">
    <link href="{{ asset('js/main.js') }}" rel="stylesheet">
    <!--====== Jquery js ======-->
    <script src="https://profilo.xyz/assets/front/js/vendor/jquery-3.4.1.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="https://profilo.xyz/assets/front/js/plugin.min.js"></script>
    <script src="https://profilo.xyz/assets/front/js/enable-push.js"></script>
    <!--====== Main js ======-->
    <script src="https://profilo.xyz/assets/front/js/main.js"></script>

</body>
