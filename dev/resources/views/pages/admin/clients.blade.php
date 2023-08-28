@extends('layouts.admin')

@section('content-title', 'Clients')

@section('head')
@endsection

@section('content-body')
  <div class="col-md-12 col-lg-8 col-xl-6">
    @component('components.entity-manager')
      @slot('update_tab')
        <h4>
          Pick a Client to Update
        </h4>

        <form id="client_lookup" action="" method="POST">
          {{ csrf_field() }}
          <select class="form-control form-control-sm" id="client_id" name="id">
            @foreach ($clients as $client)
              @if (isset($display['client']) && $display['client']->id == $client->id)
                <option value="{{ $client->id }}" selected>
                  {{ $client->name }} (currently viewing)
                </option>
              @else
                <option value="{{ $client->id }}">
                  {{ $client->name }}
                </option>
              @endif
            @endforeach
          </select>
          <button type="submit" name="lookup" class="btn btn-secondary btn-sm mt-2">Lookup</button>
        </form>

        @isset($display['client'])
          <hr class="my-2" />
          <form id="client_update_form" action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <img class="img-fluid client-image" src="{{ asset($display['client']->getLogoSrc()) }}" />
            <div class="form-group">
              <label for="update_name">Name</label>
              <input type="text" id="update_name" name="name" class="form-control" value="{{ $display['client']->name }}" />
            </div>
            <label>Client Logo</label>
            <div class="custom-file align-self-center">
              <input type="file" class="custom-file-input logo-image" id="update_image" name="image"
                     aria-describedby="update_image_help_block" />
              <label id="update_image_label" class="custom-file-label logo-image-label" for="update_image">
                Choose Profile Image
              </label>
              <small id="update_image_help_block" class="help-text">
                Image size must be &lt; 488 KB
              </small>
            </div>
            <input type="hidden" name="id" id="client_id" value="{{ $display['client']->id }}" />
            <button type="submit" name="update" class="btn btn-primary mt-2">Update</button>
          </form>
        @endisset
      @endslot

      @slot('new_tab')
        <form id="client_create_form" action="" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="create_name">Name</label>
            <input type="text" id="create_name" name="name" class="form-control" />
          </div>
          <label>Client Logo</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input logo-image" id="create_image" name="image"
                   aria-describedby="image_help_block" />
            <label id="image_label" class="custom-file-label logo-image-label" for="create_image">Choose Logo Image</label>
            <small id="image_help_block" class="help-text">
              Image size must be &lt; 488 KB
            </small>
          </div>
          <button type="submit" name="create" class="btn btn-primary mt-2">Create</button>
        </form>
      @endslot

      @slot('delete_tab')
        <h4>
          Pick a Client to Delete
        </h4>

        <form id="client_delete" class="component-delete-form" action="" method="POST">
          {{ csrf_field() }}
          <select name="id" id="delete_client_id" class="form-control form-control-sm">
            @foreach ($clients as $client)
              <option value="{{ $client->id }}">
                {{ $client->name }}
              </option>
            @endforeach
          </select>
          <button type="submit" class="btn btn-danger btn-sm mt-2" name="delete" id="delete_btn">Delete</button>
        </form>
      @endslot
    @endcomponent
  </div>
@endsection


@section('js')
  {{-- Include custom .js for handling forms --}}
  <script src="{{ asset('js/admin/clients.js') }}"></script>
@endsection
