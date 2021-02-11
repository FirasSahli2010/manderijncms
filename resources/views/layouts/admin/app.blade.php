<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
      <meta name="csrf-token" content="{{ csrf_token() }}">
       <link href="{{ asset('assets') }}/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

       <link href="{{ asset('assets') }}/css/font-awesome.css" rel="stylesheet" crossorigin="anonymous">


      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name_amdin', 'Q-CMS Dashboard') }}</title>
      <!-- Favicon -->
      <link href="{{ asset('assets') }}/img/brand/favicon.png" rel="icon" type="image/png">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <!-- Extra details for Live View on GitHub Pages -->

      <!-- Icons -->
      <!-- <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet"> -->
      <!-- <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet"> -->
      <!-- Included code -->
      <!-- mobile settings -->
       <!-- WEB FONTS -->
       <!-- up to 10% speed up for external res -->
       <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
       <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
       <link rel="preconnect" href="https://fonts.googleapis.com/">
       <link rel="preconnect" href="https://fonts.gstatic.com/">
       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

       <link rel="preload" href=" {{ asset('assets') }}/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

      <!-- CORE CSS -->

      <!-- non block rendering : page speed : js = polyfill for old browsers missing `preload` -->
      <!-- <link rel="stylesheet" href="{{ asset('assets') }}/css/core.min.css" > -->
      <link rel="stylesheet" href="{{ asset('assets') }}/css/vendor_bundle.min.css" >
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">

      <!-- <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet"> -->


      <link rel="shortcut icon" href="{{ asset('assets') }}/img/favicon.ico">
      <link rel="apple-touch-icon" href="{{ asset('assets') }}/images/logo/icon_512x512.png">

      <link rel="manifest" href="{{ asset('assets') }}/img/manifest/manifest.json">
      <meta name="theme-color" content="#7952b3">

      <!-- End included code -->
      <!-- Argon CSS -->
      <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">

      <!-- <link href="{{ asset('assets') }}/css/sb-admin-2.min.css" rel="stylesheet"> -->
      <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">


      <script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>

      <script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>

      <link rel="stylesheet" href="{{ asset('vendor') }}/laraberg/css/laraberg.css">

      <script src="{{ asset('vendor') }}/laraberg/js/laraberg.js"></script>


    </head>
    <body cz-shortcut-listen="true">
      <!-- <div id="wrapper" class="d-flex align-items-stretch flex-column"> -->
        @auth()
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          @include('layouts.admin.headers.header')
        @endauth

          <div class="container-fluid">

              <!-- <div class="col-md-2 ms-sm-auto col-lg-2 px-md-2"> -->
                @include('layouts.admin.navbars.sidebar')
              <!-- </div> -->
              <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="row g3">
                <div id="wrapper_content" class="d-flex flex-fill">
                  <div id="middle" class="flex-fill">
                    <div class="main-content">
                      @include('layouts.admin.navbars.navbar')
                      <div class="table-responsive">
                        @yield('content')
                      </div>
                    </div>
                  </div>

                </div>

                </div>


              </main>


          </div>


          @guest()
              @include('layouts.admin.footers.guest')
          @endguest
          @auth()
            @include('layouts.admin.footers.auth')
            @endauth


      <!-- </div> -->




      <script src="{{ asset('assets') }}/vendor/jquery/dist/jquery.min.js"></script>
      <script src="{{ asset('assets') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

      @stack('js')

      <!-- Argon JS -->
      <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>

      <!-- Include Code -->

      <!-- JAVASCRIPT FILES -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

      <!-- JAVASCRIPT FILES -->
      <!-- CORE FILES -->
      <script type="text/javascript" src="{{ asset('assets') }}/js/core.min.js"></script>
      <script type="text/javascript" src="{{ asset('assets') }}/js/app.js"></script>



      <!-- End include code -->
    </body>


    
</html>
