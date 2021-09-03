<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="msapplication-config" content="browserconfig.xml">

    <link rel="alternate" href="#" hreflang="en">
    <link rel="alternate" href="#" hreflang="ru">
    <link rel="alternate" href="#" hreflang="x-default">


    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
				
    
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">


    
    
    
  </head>
  <body>
    
    <div class="mainWrapper">
        
        <div class="index-page">
          @include('layouts.headers.header')

          @yield('content')
        </div>
        
        <div class="js_scrollTopContainer">
          <div id="scrollTopButton" class="navigateIcon">
          </div>
        </div>
        @include('layouts.footers.footer')
      </div>

      <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


      <!-- slick slider -->
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/lib/jquery.bez.min.js"></script>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>