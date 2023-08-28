@extends('layouts.admin')

@section('content-title', 'Carousels')

@section('head')
@endsection

@section('content-body')
  <div class="col-md-12 col-lg-8 col-xl-6">
    @component('components.entity-manager')

      @slot('update_tab')
        <h4>
          Pick a Carousel to Edit
        </h4>
        <form id="carousel_lookup" action="" method="POST">
          {{ csrf_field() }}
          <select name="carousel_id" id="select_carousel_id" class="form-control form-control-sm">
            @foreach ($carousels as $carousel)
              @if (isset($display['carousel']) && $display['carousel']->id == $carousel->id)
                <option value="{{ $carousel->id }}" selected>
                  {{ $carousel->page->name }} (currently viewing)
                </option>
              @else
                <option value="{{ $carousel->id }}">
                  {{ $carousel->page->name }}
                </option>
              @endif
            @endforeach
          </select>
          <button type="submit" name="lookup" class="btn btn-secondary btn-sm mt-2">Lookup</button>
        </form>

        @isset($display['carousel'])
          <hr class="my-2" />
          <div class="border mt-2 p-2">
            <div class="d-flex justify-content-between">
              <h5>
                Edit Carousel Items <span class="badge badge-secondary">{{ $carousel_item_count }}</span>
              </h5>
              <div>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#mdl_newCarouselItem">
                  New
                </button>
                <button type="button" class="btn btn-primary btn-sm save-item-changes"
                        onclick="carousels.saveCarouselItemChanges('{{ csrf_token() }}')">
                  Save Changes
                </button>
              </div>
            </div>
            <table id="carousel_items_table" class="table border mb-1 table-striped border-bottom table--va-middle">
              <thead>
                <tr class="text-center">
                  <th style="width: 1px" scope="col"></th>
                  <th style="width: 1px" scope="col">
                    #
                  </th>
                  <th scope="col">
                    Image <small>(click to edit)</small>
                  </th>
                  <th scope="col">
                    Title
                  </th>
                  <th scope="col">
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($display['carousel']->getOrderedItems() as $carousel_item)
                  <tr class="data-row" id="item{{ $carousel_item->id }}" data-item-id="{{ $carousel_item->id }}"
                      ondrop="carousels.drop(event)" ondragover="carousels.allowDrop(event)" draggable="true"
                      ondragstart="carousels.drag(event)">
                    <td>
                      <i class="fas fa-grip-lines"></i>
                    </td>
                    <th scope="row">
                      {{ $carousel_item->ord }}
                    </th>
                    <td style="width: 30%" class="text-center">
                      <button class="border-0" type="button" data-toggle="modal" data-target="#mdl_carouselItemImage"
                              data-item-id="{{ $carousel_item->id }}" data-src="{{ asset($carousel_item->getImgUrl()) }}"
                              data-alt="{{ $carousel_item->title }}">
                        <img alt="{{ $carousel_item->title }}" class="img-thumbnail carousel-item-thumbnail"
                             src="{{ asset_nocache($carousel_item->getImgUrl()) }}" />
                      </button>
                    </td>
                    <td style="width: 40%">
                      <textarea data-item-id="{{ $carousel_item->id }}" class="text-left" rows="2"
                                style="width: 100%">{{ $carousel_item->title }}</textarea>
                    </td>
                    <td class="text-right">
                      <form class="component-delete-form" action="" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="carousel" value="{{ $display['carousel']->id }}" />
                        <input type="hidden" name="carousel_item" value="{{ $carousel_item->id }}" />
                        <button type="submit" class="btn btn-danger btn-sm" name="delete_carousel_item">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="text-right">
              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#mdl_newCarouselItem">
                New
              </button>
              <button type="button" class="btn btn-primary btn-sm save-item-changes"
                      onclick="carousels.saveCarouselItemChanges('{{ csrf_token() }}')">
                Save Changes
              </button>
            </div>
          </div>
          <br />
          <details>
            <summary class="outline-none">
              <h5 class="d-inline-block">
                Advanced Settings
              </h5>
            </summary>
            <div class="alert alert-warning" role="alert">
              <div class="row align-items-center">
                <div class="col-auto fa-2x">
                  <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="col">
                  This section should only be used by the website administrator. When a Carousel changes pages, the
                  website code needs to be changed to properly display it on the new page.
                </div>
              </div>
            </div>
            <form id="carousel_update_form" action="" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="update_page">Carousel Page</label>
                <select name="page" id="update_page" class="form-control">
                  @foreach ($pages as $page)
                    @if ($display['carousel']->page->id == $page->id)
                      <option value="{{ $page->id }}" selected>
                        {{ $page->name }} (Current page)
                      </option>
                    @else
                      <option value="{{ $page->id }}">
                        {{ $page->name }}
                      </option>
                    @endif
                  @endforeach
                </select>
              </div>
              <input type="hidden" id="update_id" name="carousel_id" value="{{ $display['carousel']->id }}" />
              <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
          </details>
        @endisset
      @endslot

      @slot('new_tab')
        <div class="alert alert-warning" role="alert">
          <div class="row align-items-center">
            <div class="col-auto fa-2x">
              <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="col">
              After creating a carousel, the website administrator will still have to program it to be displayed. Creating
              new Carousels should probably be left to the website administrator.
            </div>
          </div>
        </div>
        <form id="carousel_new_form" action="" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="new_page">Page</label>
            <select name="page" id="new_page" class="form-control">
              @foreach ($pages as $page)
                <option value="{{ $page->id }}">
                  {{ $page->name }}
                </option>
              @endforeach
            </select>
          </div>
          <button type="submit" name="new" class="btn btn-primary">Create</button>
        </form>
      @endslot

      @slot('delete_tab')
        <div class="alert alert-danger" role="alert">
          <div class="row align-items-center">
            <div class="col-auto fa-2x">
              <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="col">
              After deleting a Carousel, the website administrator must remove it from the code as well otherwise there
              will be errors. Deleting Carousels should probably be left to the website administrator.
            </div>
          </div>
        </div>
        <h4>
          Pick a Carousel to Delete
        </h4>
        <form id="carousel_delete" class="component-delete-form" action="" method="POST">
          {{ csrf_field() }}
          <select name="carousel_id" id="carousel_delete_lookup" class="form-control form-control-sm">
            @foreach ($carousels as $carousel)
              <option value="{{ $carousel->id }}">
                {{ $carousel->page->name }}
              </option>
            @endforeach
          </select>
          <button type="submit" name="delete" class="btn btn-danger btn-sm mt-2">Delete</button>
        </form>
      @endslot

    @endcomponent
  </div>
@endsection

@section('modals')
  @isset($display['carousel'])
    <div class="modal fade" id="mdl_carouselItemImage" tabindex="-1" aria-labelledby="mdl_carouselItemImage_label"
         aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdl_carouselItemImage_label">
              Edit Carousel Item Image
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <img class="img-fluid pb-2" alt="" src="" />
            </div>
            <form id="update_carousel_item_image" action="" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="update_carousel_item_file" name="carousel_item_image"
                       aria-describedby="update_carousel_image_help_block" />
                <label id="update_carousel_item_file_label" class="custom-file-label" for="update_carousel_item_file">
                  Choose Image
                </label>
                <small id="update_carousel_image_help_block" class="help-text">
                  Image size must be &lt; 488 KB
                </small>
              </div>
              <input type="hidden" name="carousel_item_id" id="update_carousel_item_id" value="" />
              <input type="hidden" name="carousel_id" value="{{ $display['carousel']->id }}" />
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="update_carousel_item_image"
                    form="update_carousel_item_image">
              Update
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="mdl_newCarouselItem" tabindex="-1" data-backdrop="static" data-keyboard="false"
         aria-labelledby="mdl_newCarouselItem_label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdl_newCarouselItem_label">
              New Carousel Item
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="new_carousel_item" action="" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="carousel_item_title" class="col-form-label">Title:</label>
                <input type="text" class="form-control" name="carousel_item_title" id="carousel_item_title" />
              </div>
              <label class="col-form-label">Image:</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="new_carousel_item_image" name="carousel_item_image"
                       aria-describedby="new_carousel_image_help_block" />
                <label id="new_carousel_item_image_label" class="custom-file-label" for="new_carousel_itemImage">
                  Choose Image
                </label>
                <small id="new_carousel_image_help_block" class="help-text">
                  Image size must be &lt; 488 KB
                </small>
              </div>
              <input type="hidden" name="carousel_id" value="{{ $display['carousel']->id }}" />
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" name="new_carousel_item" form="new_carousel_item" class="btn btn-success">Add</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  @endisset
@endsection

@section('js')
  {{-- Include custom .js for handling forms --}}
  <script src="{{ asset('js/admin/carousels.js') }}"></script>
@endsection
