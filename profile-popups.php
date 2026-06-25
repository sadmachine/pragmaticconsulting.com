<?php
function profile_modal($modalid, $image, $name, $contentpath)
{
    ?>
<div class="modal fade profile-modal" id="<?= $modalid; ?>Info" tabindex="-1" role="dialog"
     aria-labelledby="<?= $modalid; ?>InfoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-auto">
              <img src="img/team/<?= $image; ?>" alt="<?= $name; ?>" class="img-fluid m-2 rounded profile-photo" />
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-auto">
              <h4 id="<?= $modalid; ?>InfoLabel"><?= $name; ?></h4>
            </div>
          </div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
      <div class="modal-body">
        <?php require $contentpath;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}
?>

<!-- Richard Penn Pop-up info (Bootstrap Modal) -->
<?php profile_modal('richardpenn', 'richard_penn.JPG', 'Richard Penn', "content/profiles/richard-penn.php"); ?>

<!-- Larry Bull Pop-up info (Bootstrap Modal) -->
<?php profile_modal('larrybull', 'bio_bull.jpg', 'Larry Bull', "content/profiles/larry-bull.php"); ?>

<!-- John Sweeney Pop-up info (Bootstrap Modal) -->
<?php profile_modal('johnsweeney', 'biosweeney_c.jpg', 'John Sweeney', "content/profiles/john-sweeney.php"); ?>

<!-- Diana Elliot Pop-up info (Bootstrap Modal) -->
<?php profile_modal('dianaelliott', 'bio_elliott.jpg', 'Dr. Diana B. Elliott', "content/profiles/diana-elliot.php"); ?>

<!-- Russell Snyder Pop-up info (Bootstrap Modal) -->
<?php profile_modal('russellsnyder', 'russ.png', 'Russell Snyder', "content/profiles/russell-snyder.php"); ?>

<!-- Tim Sanborn Pop-up info (Bootstrap Modal) -->
<?php profile_modal('timsanborn', 'tsanborn.jpg', 'Tim Sanborn', "content/profiles/timothy-sanborn.php"); ?>

<!-- Elizabeth Tracy Pop-up info (Bootstrap Modal) -->
<?php profile_modal('elizabethtracy', 'ltracy.jpg', 'Elizabeth Tracy', "content/profiles/elizabeth-tracy.php"); ?>

<!-- Austin Fishbaugh Pop-up info (Bootstrap Modal) -->
<?php profile_modal('austinfishbaugh', 'afishbaugh.png', 'Austin Fishbaugh', "content/profiles/austin-fishbaugh.php"); ?>

<!-- David Poole Pop-up info (Bootstrap Modal) -->
<?php profile_modal('davidpoole', 'bio_poole.jpg', 'David Poole', "content/profiles/david-poole.php"); ?>

<!-- Mark Huffman Pop-up info (Bootstrap Modal) -->
<?php profile_modal('markhuffman', 'headshot.gif', 'Mark Huffman', "content/profiles/mark-huffman.php"); ?>

<!-- Dan McAuliffe Pop-up info (Bootstrap Modal) -->
<?php profile_modal('danmcauliffe', 'headshot.gif', 'Dan McAuliffe', "content/profiles/daniel-mcauliffe.php"); ?>

<!-- Doug Derkacs Pop-up info (Bootstrap Modal) -->
<?php profile_modal('dougderkacs', 'dderkacs.jpg', 'Doug Derkacs', "content/profiles/doug-derkacs.php"); ?>

<!-- Tim Kuepper Pop-up info (Bootstrap Modal) -->
<?php /* profile_modal('timkuepper', 'tkueppers.jpg', 'Tim Kuepper', "content/profiles/tim-kuepper.php"); */ ?>

<!-- Wes Stone Pop-up info (Bootstrap Modal) -->
<?php profile_modal('wesstone', 'wes-stone.jpg', 'Wes Stone', "content/profiles/wes-stone.php"); ?>

<!-- Bill Malcolm Pop-up info (Bootstrap Modal) -->
<?php profile_modal('billmalcolm', 'wmalcolm.png', 'Bill Malcolm', "content/profiles/bill-malcolm.php"); ?>

<!-- Marsha Foxx Pop-up info (Bootstrap Modal) -->
<?php profile_modal('marshafoxx', 'marsha-foxx.jpg', 'Marsha Foxx', "content/profiles/marsha-foxx.php"); ?>

<!-- George Elias Pop-up info (Bootstrap Modal) -->
<?php profile_modal('georgeelias', 'georgeelias.jpeg', 'George Elias', "content/profiles/george-elias.php"); ?>

<!-- Dwayne Jackson Pop-up info (Bootstrap Modal) -->
<?php profile_modal('dwaynejackson', 'dwayne-jackson.jpg', 'Dwayne Jackson', "content/profiles/dwayne-jackson.php"); ?>

<!-- Harold Ingram Pop-up info (Bootstrap Modal) -->
<?php profile_modal('haroldingram', 'hingram.jpg', 'Harold Ingram', "content/profiles/harold-ingram.php"); ?>

<!-- Robert Hurley Pop-up info (Bootstrap Modal) -->
<?php profile_modal('roberthurley', 'robert_hurley.jpg', 'Robert Hurley', "content/profiles/robert-hurley.php"); ?>

<!-- Frederick Schlensker Pop-up info (Bootstrap Modal) -->
<?php profile_modal('frederickschlensker', 'fschlensker.jpg', 'Frederick Schlensker', "content/profiles/frederick-schlensker.php"); ?>

<!-- Layla Berry Pop-up info (Bootstrap Modal) -->
<?php profile_modal('laylaberry', 'lberry.png', 'Layla Berry', "content/profiles/layla-berry.php"); ?>

<!-- Terrence Blue Pop-up info (Bootstrap Modal) -->
<?php profile_modal('terrenceblue', 'terblue.jpg', 'Terrence Blue', "content/profiles/terrence-blue.php"); ?>