{{-- resources/views/components/card-titled-list.blade.php
--}}

<section
  class="d-none d-{{ $breakpoint ?? 'lg' }}-flex {{ $title_col_sizes ?? 'col-auto' }} align-items-center justify-content-center">
  <header class="h3 text-prag-block" data-aos="fade-right">
    {{ $slot }}
  </header>
</section>
<section class="col-12 col-{{ $breakpoint ?? 'lg' }}">
  <article class="card" data-aos="fade-left">
    <header class="card-header {{ $title_text_size ?? 'h4' }} d-block d-{{ $breakpoint ?? 'lg' }}-none text-center">
      {{ $slot }}
    </header>
    <ul class="simple-list">
      @foreach ($list_items as $item)
        <li class="simple-list__item">
          {{ $item }}
        </li>
      @endforeach
    </ul>
  </article>
</section>
