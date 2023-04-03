<!DOCTYPE html>
<html class="bootstrap-layout" lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots" content="noindex">

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">

  <!-- Charts CSS -->
  <link rel="stylesheet" href="{{ asset('examples/css/morris.min.css') }}">

</head>

<body class="layout-container ls-top-navbar si-l3-md-up">

  <!-- Navbar -->
    @include('layouts.nav')
  <!-- // END Navbar -->

  <!-- Sidebar -->
    @include('layouts.sidebar')
  <!-- // END Sidebar -->

  <!-- Right Sidebars -->

  <!-- Content -->
    @yield('content')

  <!-- jQuery -->
  <script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>

  <!-- Bootstrap -->
  <script src="{{ asset('assets/vendor/tether.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>

  <!-- AdminPlus -->
  <script src="{{ asset('assets/vendor/adminplus.js') }}"></script>

  <!-- App JS -->
  <script src="{{ asset('assets/js/main.min.js') }}"></script>

  <!-- Theme Colors -->
  <script src="{{ asset('assets/js/colors.js') }}"></script>

  <!-- Charts JS -->
  <script src="{{ asset('assets/vendor/raphael.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/morris.min.js') }}"></script>

  <!-- Initialize Charts -->
  <script src="{{ asset('examples/js/chart.js') }}"></script>

</body>

</html>
