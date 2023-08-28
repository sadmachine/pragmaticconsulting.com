<?php
function carousel_item($img_loc, $title, $active = false, $lazy = true, $second = false)
{
  $active_class = "";
  $lazy_class = "lazy";
  $src = "data-src='${img_loc}'";
  if ($lazy == false) {
    $lazy_class = "";
    $src = "src='${img_loc}'";
  }
  if ($second == true) {
    $src = "src='${img_loc}'";
  }
  if ($active == true) {
    $active_class = "active";
  }


  echo "<div class='carousel-item ${active_class}'>";
  echo "  <img class='d-block w-100 img-fluid ${lazy_class}' ${src} alt='${title}'>";
  echo "  <div class='carousel-caption d-none d-sm-block'>";
  echo "    <h5>${title}</h5>";
  echo "  </div>";
  echo "  <div class='carousel-caption d-block d-sm-none'>";
  echo "    <h6>${title}</h6>";
  echo "  </div>";
  echo "</div>";
}
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
  <div class="carousel-inner">
    <?php
    carousel_item('img/carousel/1.jpg', 'Business & Leadership', true, false);
    carousel_item('img/carousel/2.jpg', 'Manufacturing Expertise', false, true, true);
    carousel_item('img/carousel/3.jpg', 'Distribution & Supply Chain');
    carousel_item('img/carousel/4.jpg', 'Fabrication');
    carousel_item('img/carousel/5.jpg', 'Automotive');
    carousel_item('img/carousel/6.jpg', 'Warehouse Management');
    carousel_item('img/carousel/7.jpg', 'IT & Systems');
    carousel_item('img/carousel/8.jpg', 'Aerospace & Defense');
    carousel_item('img/carousel/9.jpg', 'Global Supply Chain');
    carousel_item('img/carousel/10.jpg', 'Energy & Power Industry');
    carousel_item('img/carousel/11.jpg', 'Medical Devices');
    carousel_item('img/carousel/12.jpg', 'Healthcare');
    carousel_item('img/carousel/13.jpg', 'Pharmaceutical');
    carousel_item('img/carousel/14.jpg', 'Food & Food Service Industry');
    carousel_item('img/carousel/15.JPG', 'Industrial Equipment & More!', false, false);
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
