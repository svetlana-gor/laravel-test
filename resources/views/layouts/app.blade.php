<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>newApp @yield('title')</title>

<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css')  }}">
<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css')  }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')  }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')  }}">

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('js/app.js')  }}" async></script>

  </head>

  <body class="d-flex flex-column h-100">

    @include('layouts.navbar')

    <div class="mx-auto py-3 text-center">
      @yield('content')
    </div>

    @include('layouts.footer')
 <script src="js/slickscript.js"></script>
 <script src="slick/slick.min.js"></script>
  </body>
</html>
