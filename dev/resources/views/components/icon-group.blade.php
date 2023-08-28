{{-- resources/views/components/icon-group.blade.php --}}

<aside class="icon-group-quad my-2 mx-3 px-3 mx-sm-5 px-sm-5 m-lg-0 p-lg-0" id="{{ $id }}">
  <div class="row justify-content-around justify-lg-content-center no-gutters m-0 p-0">
    <div class="col-auto">
      {{ $icon_top_left }}
    </div>
    <div class="col-auto">
      {{ $icon_top_right }}
    </div>
    <div class="w-100 d-none d-lg-block"></div>
    <div class="col-auto">
      {{ $icon_bottom_left }}
    </div>
    <div class="col-auto">
      {{ $icon_bottom_right }}
    </div>
  </div>
</aside>
