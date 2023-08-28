$(function() {
  $(".component-delete-form").submit(function(event) {
    response = confirm("Are you sure you would like to delete this record? (This action cannot be undone)");
    if (response) {
      return true;
    } else {
      event.preventDefault();
      return false;
    }
  });
});
