<!doctype html>

<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link type="text/css" href="https://unpkg.com/aos@next/dist/aos.css">
  <link rel="stylesheet" href="{{ resource('css/com/com.css') }}">
  <link rel="stylesheet" href="{{ resource('css/com/fonts.css') }}">
  <link rel="stylesheet" href="{{ resource('css/font-awesome/css/all.min.css') }}">

  {{-- <link rel="stylesheet" href="css/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/brands.css">
  <link rel="stylesheet" href="css/solid.css"> --}}

  <script src='https://www.google.com/recaptcha/api.js'></script>

  <!-- GA4 (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YYLZEEZMDN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-YYLZEEZMDN');
  </script>
  <!-- / GA4 (gtag.js) -->

  <!-- GA3 (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-29687620-5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-29687620-5');
  </script>
  <!-- / GA3 (gtag.js) -->


  @yield('head')

  <title>
    @section('page-title')@yield('content-title')@show | Pragmatic Consulting
    </title>
  </head>

  <body>
  @section('body')
    <div class="container-fluid">
      <div class="row d-block d-lg-none">
        <div class="col-12 header-wrapper">
          @include('includes.com.header')
        </div>
      </div>
      <div class="row">
        <div class="col-12 nav-wrapper">
          @include('includes.com.nav')
        </div>
      </div>
    </div>
    <div class="container content-wrapper" id="app">
      <div class="row justify-content-center">
        <div class="col-12">
          <main>
            <article class="main-article" id="@yield('content-id')">
            @section('content-header')
              <h1 class="page-title text-center mb-0 mt-2 ">
                @yield('content-title')
              </h1>
            @show

            @yield('content-body')
          </article>
        </main>
      </div>
    </div>
  </div>
  @include('includes.com.social-bar')
  <div class="container-fluid footer-wrapper">
    <div class="row align-items-center">
      <div class="col-12">
        @include('includes.com.footer')
      </div>
    </div>
  </div>
@show

<script src="{{ asset('js/com/app.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

@yield('js')
</body>

</html>
