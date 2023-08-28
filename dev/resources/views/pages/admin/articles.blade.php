@extends('layouts.admin')

@section('content-title', 'Articles')

@section('head')
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" />
  <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet" />
@endsection

@section('content-body')
  <div class="col-md-12 col-lg-8 col-xl-6">
    @component('components.entity-manager')
      @slot('update_tab')
        <h4>
          Pick an Article to Edit
        </h4>
        <form id="articleUpdateLookupForm" action="" method="POST">
          {{ csrf_field() }}
          <select name="id" id="articleUpdateLookup" class="form-control form-control-sm">
            <optgroup label="News">
              @foreach ($articles['news'] as $article)
                @if (isset($display['article']) && $article->id == $display['article']->id)
                  <option value="{{ $article->id }}" selected>
                    {{ $article->title }} (currently viewing)
                  </option>
                @else
                  <option value="{{ $article->id }}">
                    {{ $article->title }}
                  </option>
                @endif
              @endforeach
            </optgroup>
            <optgroup label="Events">
              @foreach ($articles['events'] as $article)
                @if (isset($display['article']) && $article->id == $display['article']->id)
                  <option value="{{ $article->id }}" selected>
                    {{ $article->title }} (currently viewing)
                  </option>
                @else
                  <option value="{{ $article->id }}">
                    {{ $article->title }}
                  </option>
                @endif
              @endforeach
            </optgroup>
          </select>
          <input type="submit" name="lookup" class="btn btn-secondary btn-sm mt-2" value="Lookup" />
        </form>

        @isset($display['article'])
          <hr class="my-2" />
          <form id="articleUpdateForm" class="quill-submission" action="" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="updateTitle">Title</label>
              <input class="form-control article-title" type="text" id="updateTitle" name="title"
                     value="{{ $display['article']->title }}" />
            </div>
            <!-- Add a selection for the types of article -->
            <div class="form-group">
              <label for="updateType">Type</label>
              <select name="type" id="updateType" class="form-control article-type">
                <option value="0" {{ $display['article']->type == 0 ? 'selected' : '' }}>
                  News
                </option>
                <option value="1" {{ $display['article']->type == 1 ? 'selected' : '' }}>
                  Event
                </option>
                <option value="2" {{ $display['article']->type == 2 ? 'selected' : '' }}>
                  External
                </option>
              </select>
            </div>
            <div class="form-group location-group">
              <label for="updateLocation">URL</label>
              <input class="form-control article-location" type="text" id="updateLocation" name="location"
                     value="{{ $display['article']->getLocation() }}" />
            </div>
            <input type="hidden" class="article-content" id="updateContent" name="content"
                   value="{{ $display['article']->content }}" />
            <input type="hidden" class="article-delta" id="updateContentDelta" name="content_delta" value="" />
            <div class="form-group editor-group">
              <label for="updateEditor">Article Content</label>
              <div class="mb-3 article-editor" id="updateEditor">
                {{-- This will be populated later using quill.setContents() [see extra_js section] --}}
              </div>
            </div>
            <input type="hidden" id="updateID" name="articleId" value="{{ $display['article']->id }}" />
            <button type="submit" name="update" class="btn btn-primary">Update</button>
          </form>
        @endisset
      @endslot

      @slot('new_tab')
        <form id="articleNewForm" class="quill-submission" action="" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="newTitle">Title</label>
            <input class="form-control article-title" type="text" id="newTitle" name="title" />
          </div>
          <!-- Add a selection for the types of article -->
          <div class="form-group">
            <label for="newType">Type</label>
            <select name="type" id="newType" class="form-control article-type">
              <option value="0">
                News
              </option>
              <option value="1">
                Event
              </option>
              <option value="2">
                External
              </option>
            </select>
          </div>
          <div class="form-group location-group">
            <label for="newLocation">URL</label>
            <input class="form-control article-location" type="text" id="newLocation" name="location" />
          </div>
          <input type="hidden" class="article-content" id="newContent" name="content" value="" />
          <input type="hidden" class="article-delta" id="newContentDelta" name="content_delta" value="" />
          <div class="form-group editor-group">
            <label for="newEditor">Article Content</label>
            <div class="mb-3 article-editor" id="newEditor"></div>
          </div>
          <button type="submit" name="create" class="btn btn-primary">Create</button>
        </form>
      @endslot

      @slot('delete_tab')
        <h4>
          Pick an Article to Delete
        </h4>
        <form id="articleDeleteLookupForm" class="component-delete-form" action="" method="POST">
          {{ csrf_field() }}
          <select name="id" id="articleDeleteLookup" class="form-control form-control-sm">
            <optgroup label="News">
              @foreach ($articles['news'] as $article)
                <option value="{{ $article->id }}">
                  {{ $article->title }}
                </option>
              @endforeach
            </optgroup>
            <optgroup label="Events">
              @foreach ($articles['events'] as $article)
                <option value="{{ $article->id }}">
                  {{ $article->title }}
                </option>
              @endforeach
            </optgroup>
          </select>
          <input type="submit" name="delete" class="btn btn-danger btn-sm mt-2" value="Delete" />
        </form>
      @endslot
    @endcomponent
  </div>
@endsection


@section('js')
  {{-- Include custom .js for handling forms --}}
  <script src="{{ asset('js/admin/articles.js') }}"></script>

  {{-- Populate the "update" quill editor, if necessary --}}
  @isset($display['article_delta'])
    <script>
      try {
        var updateDeltaStr = @json($display['article_delta']);
        var updateDelta = JSON.parse(updateDeltaStr);
        quillUpdate.setContents(updateDelta);
      } catch (ex) {
        console.error(ex);
      }
    </script>
  @endisset
@endsection
