<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'laravel') }}</title> -->
    <title>CEO INSTITUTE</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/frontend/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/frontend/cubeportfolio.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/frontend/nivo-lightbox.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/frontend/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/frontend/owl.carousel.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('css/frontend/owl.theme.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('css/frontend/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/frontend/style.css') }}" rel="stylesheet">
    <!-- boxed bg -->
    <link id="bodybg" href="{{ asset('css/frontend/bg1.css') }}" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="{{ asset('cDss/default.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
    
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>

     <!-- Core JavaScript Files -->
  <script src="{{ asset('js/frontend/jquery.min.js') }}"></script>
  <script src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/frontend/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/frontend/wow.min.js') }}"></script>
  <script src="{{ asset('js/frontend/jquery.scrollTo.js') }}"></script>
  <script src="{{ asset('js/frontend/jquery.appear.js') }}"></script>
  <script src="{{ asset('js/frontend/stellar.js') }}"></script>
  <script src="{{ asset('js/frontend/jquery.cubeportfolio.min.js') }}"></script>
  <script src="{{ asset('js/frontend/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/frontend/nivo-lightbox.min.js') }}"></script>
  <script src="{{ asset('js/frontend/custom.js') }}"></script>
</body>
</html>
