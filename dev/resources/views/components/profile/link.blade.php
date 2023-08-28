{{-- resources/views/components/profile/link.blade.php --}}

<div class="col-10 col-sm-5 col-lg-4 col-xl-3 profile-group mb-3 mx-0 mx-sm-2 mx-lg-3">
  <div class="row picture-frame">
    <div class="col">
      <a href="" data-toggle="modal" data-target="#{{ $slug }}">
        <img class="img-fluid rounded" src="{{ $image }}" alt="{{ $name }}" loading="lazy" />
      </a>
    </div>
  </div>
  <div class="row mt-2 align-items-center">
    <h5 class="col">
      <a class="profile-link" data-toggle="modal" data-target="#{{ $slug }}" href="">{{ $name }}</a>
    </h5>
  </div>
  <div class="row">
    <h6 class="col">{{ $title }}</h6>
  </div>
</div>
