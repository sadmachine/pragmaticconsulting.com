<div class="container content-wrapper" id="app">
    <div class="row justify-content-center">
        <div class="col-12">
            <main>
                <article class="main-article" id="<?= $content_id ?>">
                  <?php if (!isset($hide_content_title)) { ?>
                    <h1 class="page-title text-center mb-0 mt-2 ">
                        <?= $content_title ?>
                    </h1>
                  <?php } ?>
