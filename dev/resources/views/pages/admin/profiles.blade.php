@extends('layouts.admin')

@section('content-title', 'Profiles')

@section('head')
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" />
  <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet" />
@endsection

@section('content-body')
  <div class="col-md-12 col-lg-8 col-xl-6">
    @component('components.entity-manager')

      @slot('update_tab')
        <h4>
          Pick a Profile to Update
        </h4>

        <form id="profileUpdateLookup" action="" method="POST">
          {{ csrf_field() }}
          <select class="form-control form-control-sm" id="profileId" name="id">
            <optgroup label="Officers">
              @foreach ($profiles['officers'] as $profile)
                @if (isset($display['profile']) && $display['profile']->id == $profile->id)
                  <option value="{{ $profile->id }}" selected>
                    {{ $profile->name }} (currently viewing)
                  </option>
                @else
                  <option value="{{ $profile->id }}">
                    {{ $profile->name }}
                  </option>
                @endif
              @endforeach
            </optgroup>
            <optgroup label="Board of Advisors">
              @foreach ($profiles['board-of-advisors'] as $profile)
                @if (isset($display['profile']) && $display['profile']->id == $profile->id)
                  <option value="{{ $profile->id }}" selected>
                    {{ $profile->name }} (currently viewing)
                  </option>
                @else
                  <option value="{{ $profile->id }}">
                    {{ $profile->name }}
                  </option>
                @endif
              @endforeach
            </optgroup>
            <optgroup label="Meet Our Team">
              @foreach ($profiles['meet-our-team'] as $profile)
                @if (isset($display['profile']) && $display['profile']->id == $profile->id)
                  <option value="{{ $profile->id }}" selected>
                    {{ $profile->name }} (currently viewing)
                  </option>
                @else
                  <option value="{{ $profile->id }}">
                    {{ $profile->name }}
                  </option>
                @endif
              @endforeach
            </optgroup>
          </select>
          <button type="submit" name="lookup" class="btn btn-secondary btn-sm mt-2">Lookup</button>
        </form>

        @isset($display['profile'])
          <hr class="my-2" />
          <form id="profileUpdateForm" class="quill-submission" action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row align-items-center">
              <div class="col border-right pr-2">
                <div class="form-group">
                  <label for="updateName">Name</label>
                  <input type="text" id="updateName" name="name" class="form-control"
                         value="{{ $display['profile']->name }}" />
                </div>
                <div class="form-group">
                  <label for="updateTitle">Title</label>
                  <input type="text" id="updateTitle" name="title" class="form-control"
                         value="{{ $display['profile']->title }}" />
                </div>
                <label>Profile Image</label>
                <div class="custom-file form-group">
                  <input type="file" class="custom-file-input profile-image" id="updateImage" name="image"
                         aria-describedby="update_image_help_block" />
                  <label id="updateImageLabel" class="custom-file-label profile-image-label" for="updateImage">
                    Choose Profile Image
                  </label>
                  <small id="update_image_help_block" class="help-text">
                    Image size must be &lt; 488 KB
                  </small>
                </div>
              </div>
              <div class="col-3 pl-2">
                <img class="img-fluid" src="{{ asset_nocache($display['profile']->getImgSrc()) }}" />
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="updateContent">Profile Content</label>
              <input type="hidden" class="profile-content" id="updateContent" name="content" />
              <div class="profile-editor" id="updateEditor">
                {!! $display['profile']->getContentForUpdating() !!}
              </div>
            </div>
            <div class="form-group form-row">
              <div class="col-md-6">
                <label for="updatePage">Profile Page:</label>
                <select class="form-control profile-page" id="updatePage" name="page">
                  @if ($display['profile']->page == 'officers')
                    <option value="officers" selected>
                      Officers
                    </option>
                  @else
                    <option value="officers">
                      Officers
                    </option>
                  @endif

                  @if ($display['profile']->page == 'board-of-advisors')
                    <option value="board-of-advisors" selected>
                      Board of Advisors
                    </option>
                  @else
                    <option value="board-of-advisors">
                      Board of Advisors
                    </option>
                  @endif

                  @if ($display['profile']->page == 'meet-our-team')
                    <option value="meet-our-team" selected>
                      Meet Our Team
                    </option>
                  @else
                    <option value="meet-our-team">
                      Meet Our Team
                    </option>
                  @endif
                </select>
              </div>
              <div class="col-md-6">
                <label for="updateOrder">Profile Position:</label>
                <select class="form-control profile-order" id="updateOrder" name="order"></select>
              </div>
            </div>
            <input type="hidden" name="id" id="profileId" value="{{ $display['profile']->id }}" />
            <button type="submit" name="update" class="btn btn-primary mt-2">Update</button>
          </form>
        @endisset
      @endslot

      @slot('new_tab')
        <form id="profileNewForm" class="quill-submission" action="" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" />
          </div>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" />
          </div / <label>Profile Image</label>
          <div class="custom-file form-group">
            <input type="file" class="custom-file-input profile-image" id="image" name="image"
                   aria-describedby="new_image_help_block" />
            <label id="imageLabel" class="custom-file-label profile-image-label" for="image">Choose Profile Image</label>
            <small id="new_image_help_block" class="help-text">
              Image size must be &lt; 488 KB
            </small>
          </div>
          <div class="form-group mt-3">
            <label for="content">Profile Content</label>
            <input type="hidden" class="profile-content" id="content" name="content" />
            <div class="profile-editor" id="newEditor"></div>
          </div>
          <div class="form-group form-row">
            <div class="col-md-6">
              <label for="page">Profile Page:</label>
              <select class="form-control profile-page" id="page" name="page">
                <option value="officers">
                  Officers
                </option>
                <option value="board-of-advisors">
                  Board of Advisors
                </option>
                <option value="meet-our-team">
                  Meet Our Team
                </option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="order">Profile Position:</label>
              <select class="form-control profile-order" id="order" name="order"></select>
            </div>
          </div>
          <button type="submit" name="create" class="btn btn-primary mt-2">Create</button>
        </form>
      @endslot

      @slot('delete_tab')
        <h4>
          Pick a Profile to Delete
        </h4>
        <form id="profileDeleteLookupForm" class="component-delete-form" action="" method="POST">
          {{ csrf_field() }}
          <select name="id" id="profileDeleteId" class="form-control form-control-sm">
            <optgroup label="Officers">
              @foreach ($profiles['officers'] as $profile)
                <option value="{{ $profile->id }}">
                  {{ $profile->name }}
                </option>
              @endforeach
            </optgroup>
            <optgroup label="Board of Advisors">
              @foreach ($profiles['board-of-advisors'] as $profile)
                <option value="{{ $profile->id }}">
                  {{ $profile->name }}
                </option>
              @endforeach
            </optgroup>
            <optgroup label="Meet Our Team">
              @foreach ($profiles['meet-our-team'] as $profile)
                <option value="{{ $profile->id }}">
                  {{ $profile->name }}
                </option>
              @endforeach
            </optgroup>
          </select>
          <button type="submit" class="btn btn-danger btn-sm mt-2" name="delete" id="deleteBtn">Delete</button>
        </form>
      @endslot
    @endcomponent
  </div>
@endsection


@section('js')
  {{-- Include custom .js for handling forms --}}
  <script src="{{ asset('js/admin/profiles.js') }}"></script>

  <script>
    var profiles = window.profiles;
    $(function() {
      var order = @json($order);
      @isset($display['profile'])
        var originalOrder = "{{ $display['profile']->ord }}";
      @else
        var originalOrder = 0;
      @endisset

      var originalPage = $("#updatePage").val();

      profiles.populateOrderField("#profileUpdateForm", order, originalPage, originalOrder);
      profiles.populateOrderField("#profileNewForm", order);
    });
  </script>
@endsection
