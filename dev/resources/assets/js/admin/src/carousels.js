export function allowDrop(ev) {
  ev.preventDefault();
}

export function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

export function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  var dragged = document.getElementById(data);
  while (dragged && dragged.parentNode && dragged.tagName != "TR") {
    dragged = dragged.parentNode;
  }

  var dropzone = ev.target;
  while (dropzone && dropzone.parentNode && dropzone.tagName != "TR") {
    dropzone = dropzone.parentNode;
  }

  var parent = dragged.parentNode;
  if (!dropzone.nextElementSibling) {
    parent.append(dragged);
  } else if (dragged.nextElementSibling == dropzone) {
    dropzone = dropzone.nextElementSibling;
    parent.insertBefore(dragged, dropzone);
  } else {
    parent.insertBefore(dragged, dropzone);
  }
  showUpdateButton();
}

export function showUpdateButton() {
  if (!window.carousel_item_updated) {
    window.carousel_item_updated = true;
    $(".save-item-changes").each(function() {
      $(this).prop("disabled", false);
    });
  }
}

export function saveCarouselItemChanges(csrf_token) {
  var table = $("#carousel_items_table");
  var order = 1;
  var items = [];
  table.find(".data-row").each(function() {
    var current_id = $(this).data("itemId");
    var update_title = $(this)
      .find("textarea")
      .val();
    var item_info = { id: current_id, title: update_title, order: order };
    items.push(item_info);
    order++;
  });
  var parameters = {
    _token: csrf_token,
    items: JSON.stringify(items),
  };
  $.post("update-carousel-items", parameters, function(data) {
    data = JSON.parse(data);
    if (data.response) {
      window.carousel_item_updated = false;
      $("#carousel_lookup button[name='lookup']").click();
    } else {
      alert("Failed to save changes to carousel items. Please contact the system administrator.");
    }
  });
}
