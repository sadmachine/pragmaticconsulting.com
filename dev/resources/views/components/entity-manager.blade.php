{{-- resources/views/components/entity-manager.blade.php --}}

<div class="card">
  <header class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="updateTabLabel" data-toggle="tab" href="#updateTab" role="tab"
           aria-controls="updateTab" aria-selected="true">Lookup/Update
          Existing</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="newTabLabel" data-toggle="tab" href="#newTab" role="tab" aria-controls="newTab"
           aria-selected="false">New</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="deleteTabLabel" data-toggle="tab" href="#deleteTab" role="tab" aria-controls="deleteTab"
           aria-selected="false">Delete</a>
      </li>
    </ul>
  </header>
  <div class="tab-content p-3" id="myTabContent">
    <div class="tab-pane fade show active" id="updateTab" role="tabpanel" aria-labelledby="updateTabLabel">
      {{ $update_tab }}
    </div>
    <div class="tab-pane fade" id="newTab" role="tabpanel" aria-labelledby="newTabLabel">
      {{ $new_tab }}
    </div>
    <div class="tab-pane fade" id="deleteTab" role="tabpanel" aria-labelledby="deleteTabLabel">
      {{ $delete_tab }}
    </div>
  </div>
</div>
