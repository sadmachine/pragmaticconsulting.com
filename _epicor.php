<?php

class CarouselItem
{

  public $img_loc;
  public $title;
  public $active;
  public $lazy;

  public function __construct($img_loc, $title, $active = false, $lazy = true)
  {
    $this->img_loc = $img_loc;
    $this->title = $title;
    $this->active = $active;
    $this->lazy = $lazy;
  }

  public function render()
  {
    $active_class = "";
    $lazy_class = "lazy";
    $src = "data-src='$this->img_loc'";
    if ($this->lazy == false) {
      $lazy_class = "";
      $src = "src='$this->img_loc'";
    }
    if ($this->active == true) {
      $active_class = "active";
    }
    $rendered = <<<HEREDOC
<div class='carousel-item ${active_class}'>
  <img class='d-block w-100 img-fluid ${lazy_class}' ${src} alt='$this->title'>
  <div class='carousel-caption d-none d-sm-block'>
    <h5>$this->title</h5>
  </div>
  <div class='carousel-caption d-block d-sm-none'>
    <h6>$this->title</h6>
  </div>
</div>
HEREDOC;
    return $rendered;
  }

  public function display()
  {
    echo $this->render();
  }
}

function carousel_item($img_loc, $title, $active = false, $lazy = true)
{
  $item = new CarouselItem($img_loc, $title, $active, $lazy);
  $item->display();
}
?>
<!DOCTYPE html>
<html>

<head>
  <?php require 'template/pre-includes.php' ?>
  <title>Epicor - Pragmatic Consulting, Inc.</title>
  <meta name="description" content="Implement Epicor properly with the help of Pragmatic Consulting, Inc. We help fully utilize the large range of tools Epicor offers into your organization.">
</head>

<body>
  <div class="container-fluid">
    <?php require 'template/header.php' ?>

    <section id="content" class="row justify-content-center">
      <main class="col-12 col-md-11 col-lg-9 p-3 p-sm-4">
        <h2 class="content-title">Epicor - Kinetic & Profit21</h2>
        <?php require 'content/erp/epicor.php'; ?>
      </main>
    </section>

    <footer id="footer" class="row justify-content-center">
      <?php require 'template/footer.php' ?>
    </footer>
  </div>

  <?php require 'template/post-includes.php' ?>
</body>

</html>