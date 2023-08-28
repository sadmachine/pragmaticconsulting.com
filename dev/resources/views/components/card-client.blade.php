{{-- resources/views/components/card-client.blade.php --}}

<article class="card card-client">
  <section class="card-body">
    <div class="d-flex flex-column">
      <div class="client-img">
        <img src="{{ $img }}" alt="{{ $slot }}" class="{{ $extra_classes ?? '' }} img-contain" />
      </div>
      <div class="client-name">
        <p>{{ $slot }}</p>
      </div>
    </div>
  </section>
</article>
