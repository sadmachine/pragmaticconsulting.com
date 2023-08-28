<?php
function system_info_modal($modalid, $image, $contentpath)
{
    ?>
<div class="modal fade profile-modal" id="<?= $modalid; ?>Info" tabindex="-1" role="dialog" aria-labelledby="<?= $modalid; ?>InfoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header erp-systems">
        <img class="img-fluid" src="img/logos/<?= $image; ?>" id="<?= $modalid; ?>InfoLabel" />
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php require $contentpath; ?>
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

<!-- IQMS Pop-up info (Bootstrap Modal) -->
<?php system_info_modal('iqms', 'iqms.png', 'content/erp/iqms.php'); ?>

<!-- Traverse Pop-up info (Bootstrap Modal) -->
<?php system_info_modal('traverse', 'traverse.png', 'content/erp/traverse.php'); ?>

<!-- SAP Pop-up info (Bootstrap Modal) -->
<?php system_info_modal('sap', 'sap.png', 'content/erp/sap.php'); ?>

<!-- JDEdwards Pop-up info (Bootstrap Modal) -->
<?php system_info_modal('jdedwards', 'jdedwards.png', 'content/erp/jdedwards.php'); ?>

<!-- Fishbowl Pop-up info (Bootstrap Modal) -->
<?php system_info_modal('fishbowl', 'fishbowl.png', 'content/erp/fishbowl.php'); ?>

<!-- GlobalShop Pop-up info (Bootstrap Modal) -->
<?php system_info_modal('globalshop', 'global.jpg', 'content/erp/globalshop.php'); ?>

<!-- Syteline Pop-up info (Bootstrap Modal) -->
<?php system_info_modal('syteline', 'syteline.png', 'content/erp/syteline.php'); ?>

<!-- Dynamics Pop-up info (Bootstrap Modal) -->
<?php system_info_modal('dynamics', 'dynamics.png', 'content/erp/dynamics.php'); ?>

<!-- Epicor Pop-up info (Bootstrap Modal) -->
<?php system_info_modal('epicor', 'epicor.jpg', 'content/erp/epicor.php'); ?>

<!-- Syspro Pop-up info (Bootstrap Modal) -->
<?php system_info_modal('syspro', 'syspro.png', 'content/erp/syspro.php'); ?>
