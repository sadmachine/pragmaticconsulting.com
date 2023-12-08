{{-- /resources/views/_components/li-link.blade.php --}}

@isset($indented)
  <li class="simple-list__item link indented">
    <div class="d-flex flex-row">
      <span class="m-0 flex-fill">
        <a class="stretched-link" href="{{ url($location) }}">{{ $slot }}</a>
      </span>
      <span><i class="fas fa-arrow-alt-circle-right fa-lg"></i></span>
    </div>
  </li>
@else
  <li class="simple-list__item link">
    <div class="d-flex flex-row">
      <span class="m-0 flex-fill">
        <a class="stretched-link" href="{{ url($location) }}">{{ $slot }}</a>
      </span>
      <span><i class="fas fa-arrow-alt-circle-right fa-lg"></i></span>
    </div>
  </li>
@endisset
