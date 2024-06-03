<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link href="assets/css/app.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet" />
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <title>@yield('title')</title>
  </head>

  <body>
    <div class="wrapper">
        @include('barang.include.sidebar')

        @include('barang.include.header')

        <div class="page-wrapper">
            @yield('content')
        </div>

        @include('barang.include.footer')

    </div>
    @include('barang.include.script')
    @stack('script')
  </body>

</html>
