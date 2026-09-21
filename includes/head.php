<?php
declare(strict_types=1);

if (!isset($page) || !is_array($page)) {
    throw new RuntimeException('Page metadata was not initialized.');
}

$schema = mango_page_schema($page);
?>
<!DOCTYPE html>
<html class="no-js" lang="en-IN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= mango_e($page['title']) ?></title>
    <meta name="description" content="<?= mango_e($page['description']) ?>">
    <meta name="robots" content="<?= mango_e($page['robots']) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="<?= mango_e($page['canonical']) ?>">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= mango_e(MANGO_SITE_NAME) ?>">
    <meta property="og:title" content="<?= mango_e($page['title']) ?>">
    <meta property="og:description" content="<?= mango_e($page['description']) ?>">
    <meta property="og:url" content="<?= mango_e($page['canonical']) ?>">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?= mango_e($page['title']) ?>">
    <meta name="twitter:description" content="<?= mango_e($page['description']) ?>">

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="assets/css/vendor/magnifypopup.min.css">
    <link rel="stylesheet" href="assets/css/vendor/odometer.min.css">
    <link rel="stylesheet" href="assets/css/vendor/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animation.min.css">
    <link rel="stylesheet" href="assets/css/vendor/jqueru-ui-min.css">
    <link rel="stylesheet" href="assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/vendor/tipped.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/mango-overrides.css">

    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP) ?></script>
</head>
<body class="<?= mango_e($bodyClass ?? 'sticky-header') ?>">
    <div id="edublink-preloader">
        <div class="loading-spinner">
            <div class="preloader-spin-1"></div>
            <div class="preloader-spin-2"></div>
        </div>
        <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">Cancel Preloader</span>
        </div>
    </div>

    <div id="main-wrapper" class="main-wrapper">
