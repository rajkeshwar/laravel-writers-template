<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta name="keywords" content="Moun Goonj" />
  <meta name="description" content="Moun Goonj - Responsive HTML5 Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" type="image/x-icon" href="/favicon/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
      <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Gotu&family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Libs CSS -->
    <link href="/vendor/css/bootstrap.css" rel="stylesheet" />
    <link href="/vendor/css/all.min.css" rel="stylesheet" />
    <link href="/vendor/css/fontawesome.min.css" rel="stylesheet" />
    <link href="/vendor/css/streamline-icon.css" rel="stylesheet" />
    <link href="/vendor/css/cubeportfolio.min.css" rel="stylesheet" />
    <link href="/vendor/css/header.css" rel="stylesheet" />
    <link href="/vendor/css/style.css" rel="stylesheet" />
    <link href="/vendor/css/utilities.css" rel="stylesheet" />
    <link href="/vendor/css/css3-variables.css" rel="stylesheet" />

    <!-- Skin -->
    <link rel="stylesheet" href="/vendor/css/default.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/vendor/css/custom.css">

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">

        @include('shared/header')

        <main class="main-content">

          @yield('content')
          
        </main>

        @include('shared/footer')
    </div>
    <div id="app"></div>
    <script src="/vendor/js/jquery.min.js"></script>
    <script src="/vendor/js/jquery-migrate.min.js"></script>
    <script src="/vendor/js/jquery.visible.min.js"></script>
    <script src="/vendor/js/jquery.easing.min.js"></script>
    <script src="/vendor/js/popper.js"></script>
    <script src="/vendor/js/bootstrap.min.js"></script>
    <script src="/vendor/js/jquery.cubeportfolio.min.js"></script>
    <script src="/vendor/js/cubeportfolio.init.js"></script>
    <script src="/vendor/js/slick.js"></script>
    <script src="/vendor/js/svg-injector.min.js"></script>

    <script src="/vendor/js/other.js"></script>
    <script src="/vendor/js/page.js"></script>
    <script src="/vendor/js/script.js"></script>

    <!-- Theme Custom -->
    <script src="/vendor/js/custom.js"></script>

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>
    @stack('inline-scripts')
</body>
</html>
