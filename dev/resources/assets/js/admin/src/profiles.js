export function populateOrderField(formId, order, originalPage = null, originalOrder = null) {
  var $parentForm = $(formId);
  var currentPage = $parentForm.find(".profile-page").val();
  var $el = $parentForm.find(".profile-order");
  $el.empty();
  $.each(order[currentPage], function(key, value) {
    var $option = $("<option></option>")
      .attr("value", value)
      .text(key);
    if (originalPage == currentPage && originalOrder == value) {
      $option.attr("selected", true);
    }
    $el.append($option);
  });
  if (originalOrder == null) {
    $el
      .find("option")
      .last()
      .attr("selected", true);
  }

  $parentForm.find(".profile-page").change(function() {
    var currentPage = $(this).val();
    $el.empty();
    $.each(order[currentPage], function(key, value) {
      var $option = $("<option></option>")
        .attr("value", value)
        .text(key);
      if (originalPage == currentPage && originalOrder == value) {
        $option.attr("selected", true);
      }
      $el.append($option);
    });
    if (originalOrder == null) {
      $el
        .find("option")
        .last()
        .attr("selected", true);
    }
  });
}
