<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<script>
$('.carousel').on('slide.bs.carousel', function(event) {
  if (event.direction == "left") {
    var $nextNextImage = $('.carousel-item.active', this).next('.carousel-item').next('.carousel-item').find('img');
    $nextNextImage.attr('src', $nextNextImage.data('src'));
  } else {
    var $prevImage = $('.carousel-item.active', this).prev('.carousel-item').find('img');
    var $prevPrevImage = $('.carousel-item.active', this).prev('.carousel-item').prev('.carousel-item').find('img');
    $prevImage.attr('src', $prevImage.data('src'));
    $prevPrevImage.attr('src', $prevPrevImage.data('src'));
  }
});
</script>