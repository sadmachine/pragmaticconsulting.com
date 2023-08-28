try {
  window.carousels = require("./src/carousels.js");
} catch (e) {
  console.error(e);
}
window.carousel_item_updated = false;

$("#mdl_carouselItemImage").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var src = button.data("src") + "?" + Math.random() * 10000000; // Extract info from data-* attributes
  var alt = button.data("alt"); // Extract info from data-* attributes
  var item_id = button.data("itemId"); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  var img = modal.find(".modal-body img");
  var carousel_item_id_field = modal.find("#update_carousel_item_id");
  img.prop("src", src);
  img.prop("alt", alt);
  carousel_item_id_field.prop("value", item_id);
});

$(function() {
  $(".save-item-changes").each(function() {
    $(this).prop("disabled", true);
  });

  $("#carousel_items_table textarea").on("input", function() {
    carousels.showUpdateButton();
  });

  utils.initCustomFileEvents();

  $(window).bind("beforeunload", function() {
    if (window.carousel_item_updated) return true;
  });
});
