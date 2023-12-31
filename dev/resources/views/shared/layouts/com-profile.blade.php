<!doctype html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link type="text/css" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('css/com/com.css') }}">
    <link rel="stylesheet" href="{{ asset('css/com/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/all.min.css') }}">

    {{-- <link rel="stylesheet" href="css/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/brands.css">
  <link rel="stylesheet" href="css/solid.css"> --}}

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://www.googletagmanager.com/gtag/js?id=UA-29687620-5" async></script>

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
                    @include('shared.includes.header')
                </div>
            </div>
            <div class="row">
                <div class="col-12 nav-wrapper">
                    @include('shared.includes.nav')
                </div>
            </div>
        </div>
        <div class="container content-wrapper">
            <div class="row justify-content-center">
                <div class="col-12">
                    <main>
                        <article class="main-article" id="@yield('content-id')">
                            <article class="card" data-aos="fade-in">
                                <h1 class="card-header text-center">
                                    @yield('content-title')
                                </h1>
                                <section class="card-body">
                                    @yield('content-body')
                                </section>
                            </article>
                    </main>
                </div>
            </div>
        </div>
        @include('shared.includes.social-bar')
        <div class="container-fluid footer-wrapper">
            <div class="row align-items-center">
                <div class="col-12">
                    @include('shared.includes.footer')
                </div>
            </div>
        </div>
    @show

    @yield('modals')
    <script src="{{ asset('js/com/app.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    @section('js')
    @endsection
</body>

</html>
