{{-- resources/views/components/profile/target.blade.php --}}

<div class="modal fade profile-modal" id="{{ $slug }}" tabindex="-1" role="dialog" aria-labelledby="{{ $slug }}Label"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-auto">
              <img src="{{ $image }}" alt="{{ $name }}" loading="lazy" class="img-fluid m-2 rounded profile-photo" />
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-auto">
              <h4 id="{{ $slug }}Label">{{ $name }}</h4>
            </div>
          </div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ $slot }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
