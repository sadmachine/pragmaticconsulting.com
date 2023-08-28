{{-- resources/views/components/alert-dismissible.blade.php --}}
<div class="response alert alert-{{ $alert->type }} alert-dismissible fade show" role="alert">
  @if ($alert->icon != null)
    <div class="row align-items-center">
      <div class="col-auto">
        <i class="{{ $alert->icon }} fa-2x"></i>
      </div>
      <div class="col">
        {!! $alert->message !!}
      </div>
    </div>
  @else
    {!! $alert->message !!}
  @endif
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
