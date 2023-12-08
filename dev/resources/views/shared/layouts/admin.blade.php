@inject('Route', '\Illuminate\Support\Facades\Route')
<!doctype html>

<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ asset('css/admin/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font-awesome/css/all.min.css') }}">

  @yield('head')

  <title>@section('page-title')@yield('content-title')@show | Admin Dashboard</title>
</head>

<body>
  <div class="d-sm-flex  flex-column  height-min-screen" id="mainContainer">
    <div class="row  no-gutters" id="titleRow">
      <div class="col  text-center">
        @include('includes.admin.nav')
      </div>
    </div>

    <div class="sidebar-wrapper  d-flex  flex-grow-1">
      <nav class="sidebar  {{ Auth::check() ? 'sidebar--expand' : '' }}  bg-prag-black  sticky-top">
        <ul class="list-unstyled  py-3">
          <li>
            <a href="#website-components"
               class="menu-title  menu-title--light  font-size-1p1  text-uppercase  dropdown-toggle"
               data-toggle="collapse" aria-expanded="true">
              Website Components
            </a>
            <ul class="collapse  show  list-unstyled" id="webte-components">
              <li class="menu-item  menu-item--light  {{ $Route::current() == '/admin/articles' ? 'active' : '' }}">
                <a class="menu-item__link  menu-item__link--light  stretched-link  {{ $Route::current() == '/admin/articles' ? 'active' : '' }}"
                   href="{{ url('/admin/articles') }}">
                  <i class="far  fa-fw  fa-newspaper  pr-3"></i> Articles
                </a>
              </li>
              <li class="menu-item  menu-item--light  {{ $Route::current() == '/admin/clients' ? 'active' : '' }}">
                <a class="menu-item__link  menu-item__link--light  stretched-link  {{ $Route::current() == '/admin/clients' ? 'active' : '' }}"
                   href="{{ url('/admin/clients') }}">
                  <i class="far  fa-fw  fa-address-card  pr-3"></i> Clients {{ $Route::currentRouteName() }}
                </a>
              </li>
              <li
                  class="menu-item  menu-item--light  {{ $Route::current() == url('/admin/profiles') ? 'active' : '' }}">
                <a class="menu-item__link  menu-item__link--light  stretched-link  {{ $Route::current() == url('/admin/profiles') ? 'active' : '' }}"
                   href="{{ url('/admin/profiles') }}">
                  <i class="fas  fa-fw  fa-user-edit  pr-3"></i> Profiles
                </a>
              </li>
              <li class="menu-item  menu-item--light  {{ $Route::current() == '/admin/carousels' ? 'active' : '' }}">
                <a class="menu-item__link  menu-item__link--light  stretched-link  {{ $Route::current() == '/admin/carousels' ? 'active' : '' }}"
                   href="{{ url('/admin/carousels') }}">
                  <i class="far  fa-fw  fa-images  pr-3"></i> Carousels
                </a>
              </li>
            </ul>
            </ai>

        </ul>
      </nav>
      <div id="main" class="w-100">
        {{-- Sidebar toggle button, removed for now
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" class="sidebar-collapse btn btn-info">
              <i class="fas fa-align-left"></i>
              <span>Toggle Sidebar</span>
            </button>
          </div>
        </nav> --}}
        <div class="row  justify-content-center">
          <div class="col-8  col-sm-auto">
            @isset($alert)
              @component('components.alert-dismissible', ['alert' => $alert])
              @endcomponent
            @endisset
          </div>
        </div>
        <div class="row  mt-3  justify-content-center">
          @yield('content-body')
        </div>
      </div>
    </div>
  </div>

  @yield('modals')

  <script src="{{ asset('js/admin/admin.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.sidebar-collapse').on('click', function() {
        $('.sidebar').toggleClass('sidebar--expand');
      });
    });

  </script>
  @yield('js')
</body>

</html>
