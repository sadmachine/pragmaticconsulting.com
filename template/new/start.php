<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link type="text/css" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="css/new/com.css">
    <link rel="stylesheet" href="css/new/fonts.css">
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css">

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- GA4 (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YYLZEEZMDN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-YYLZEEZMDN');
    </script>
    <!-- / GA4 (gtag.js) -->

    <!-- GA3 (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-29687620-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-29687620-5');
    </script>
    <!-- / GA3 (gtag.js) -->


    <title>
        <?= $content_title ?> | Pragmatic Consulting
    </title>
</head>

<body>
    <div class="container-fluid">
        <div class="row d-block d-lg-none">
            <div class="col-12 header-wrapper">
                <?php require_once __DIR__ . "/header.php" ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 nav-wrapper">
                <?php require_once __DIR__ . "/nav.php" ?>
            </div>
        </div>
    </div>
    <div class="container content-wrapper" id="app">
        <div class="row justify-content-center">
            <div class="col-12">
                <main>
                    <article class="main-article" id="<?= $content_id ?>">
                        <h1 class="page-title text-center mb-0 mt-2 ">
                            <?= $content_title ?>
                        </h1>