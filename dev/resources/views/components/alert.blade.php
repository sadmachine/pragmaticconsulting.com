{{-- resources/views/components/alert.blade.php --}}
<div class="response alert alert-{{ $alert->type }}" role="alert">
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
</div>
