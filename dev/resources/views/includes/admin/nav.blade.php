{{-- /resources/views/admin/nav.blade.php --}}

<nav class="navbar navbar-expand-lg bg-prag-red px-3">
  <a class="navbar-brand" href="#">
    <h1 class="text-white text-left">
      Admin Dashboard <br class="d-inline-block d-lg-none"><small class="text-light">@yield('content-title')</small>
    </h1>
  </a>
  <button class="navbar-toggler navbar-dark bg-dark" type="button" data-toggle="collapse" data-target="#navbarContent"
          aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav authentication-nav ml-auto">

      <!-- Authentication Links -->
      @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.register') }}">Register</a>
        </li>
      @else
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
             aria-haspopup="true" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-item">
              <a href="{{ route('logout') }}"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
      @endguest
    </ul>
  </div>
</nav>
