{{-- /resources/views/includes/com/header.blade.php --}}

<div class="container">
  <div class="row">
    <div class="col-12">
      <header class="d-flex flex-row justify-content-center">
        <a href="{{ route('home', env('ROUTE_EXT', '')) }}">
          <img class="img-fluid" src="{{ resource('img/blacklogo.png') }}" alt="Pragmatic Consulting, Inc. Logo" />
        </a>
      </header>
    </div>
  </div>
</div>
