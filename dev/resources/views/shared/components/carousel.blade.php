{{-- /resources/views/_components/carousel.blade.php --}}

@foreach ($carousel_items as $carousel_item)
  @if ($loop->first)
    <div class="carousel-item active">
      <img class="d-block w-100 img-fluid" src="{{ $carousel_item->getImgUrl() }}"
        alt="{{ $carousel_item->title }}">
      <div class="carousel-caption d-flex flex-row justify-content-center">
        <h5 class="d-none d-sm-block">
          {{ $carousel_item->title }}
        </h5>
        <h6 class="d-sm-none">
          {{ $carousel_item->title }}
        </h6>
      </div>
    </div>
  @elseif ($loop->index == 1 or $loop->last)
    <div class="carousel-item">
      <img class="d-block w-100 img-fluid" src="{{ $carousel_item->getImgUrl() }}"
        alt="{{ $carousel_item->title }}">
      <div class="carousel-caption d-flex flex-row justify-content-center">
        <h5 class="d-none d-sm-block">
          {{ $carousel_item->title }}
        </h5>
        <h6 class="d-sm-none">
          {{ $carousel_item->title }}
        </h6>
      </div>
    </div>
  @else
    <div class="carousel-item">
      <img class="d-block w-100 img-fluid lazy" data-src="{{ $carousel_item->getImgUrl() }}"
        alt="{{ $carousel_item->title }}">
      <div class="carousel-caption d-flex flex-row justify-content-center">
        <h5 class="d-none d-sm-block">
          {{ $carousel_item->title }}
        </h5>
        <h6 class="d-sm-none">
          {{ $carousel_item->title }}
        </h6>
      </div>
    </div>
  @endif
@endforeach
