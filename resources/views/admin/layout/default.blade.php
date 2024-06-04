<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link
      href="{{ asset('plugins/vectormap/jquery-jvectormap-2.0.2.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-extended.css') }}" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header-colors.css') }}" />
    @stack('css')
    <title>@yield('title')</title>
  </head>

  <body>
    <div class="wrapper">
        @include('admin.include.sidebar')

        @include('include.header')

        <div class="page-wrapper">
            @yield('content')
        </div>

        @include('include.footer')

    </div>
    @include('include.script')
    @stack('script')
  </body>

</html>
