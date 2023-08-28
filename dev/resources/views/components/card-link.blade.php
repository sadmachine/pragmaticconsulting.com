{{-- resources/views/components/card-link.blade.php --}}

<a href="{{ $href }}" class="card-link">
  <article class="card" data-aos="{{ $aos ?? 'fade-in' }}">
    <section class="card-body">
      <div class="row align-items-center">
        <div class="col-2  card-link__icon">
          {{ $icon }}
        </div>
        <div class="col-10">
          <strong class="card-link__title">{{ $title }}</strong>
          <hr class="my-1" />
          {{ $description }}
        </div>
      </div>
    </section>
  </article>
</a>
