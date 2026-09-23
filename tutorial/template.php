<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/site-config.php';
require_once __DIR__ . '/../includes/google-site-tools.php';

function mango_tutorial_render_head(array $meta): void
{
    $title = (string) ($meta['title'] ?? 'Free Tutorials | Mango Engineers');
    $description = (string) ($meta['description'] ?? 'Free technology tutorials by Mango Engineers.');
    $canonical = (string) ($meta['canonical'] ?? MANGO_SITE_URL . '/tutorial/');
    $robots = (string) ($meta['robots'] ?? 'index,follow');
    $schema = $meta['schema'] ?? [];

    echo '<!DOCTYPE html><html class="no-js" lang="en-IN"><head>';
    echo '<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">';
    echo '<title>' . mango_e($title) . '</title>';
    echo '<meta name="description" content="' . mango_e($description) . '">';
    echo '<meta name="robots" content="' . mango_e($robots) . '">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
    echo '<link rel="canonical" href="' . mango_e($canonical) . '">';
    echo '<base href="/">';

    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:site_name" content="' . mango_e(MANGO_SITE_NAME) . '">';
    echo '<meta property="og:title" content="' . mango_e($title) . '">';
    echo '<meta property="og:description" content="' . mango_e($description) . '">';
    echo '<meta property="og:url" content="' . mango_e($canonical) . '">';
    echo '<meta name="twitter:card" content="summary">';
    echo '<meta name="twitter:title" content="' . mango_e($title) . '">';
    echo '<meta name="twitter:description" content="' . mango_e($description) . '">';

    echo '<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">';
    foreach ([
        'assets/css/vendor/bootstrap.min.css',
        'assets/css/vendor/icomoon.css',
        'assets/css/vendor/remixicon.css',
        'assets/css/vendor/magnifypopup.min.css',
        'assets/css/vendor/odometer.min.css',
        'assets/css/vendor/lightbox.min.css',
        'assets/css/vendor/animation.min.css',
        'assets/css/vendor/jqueru-ui-min.css',
        'assets/css/vendor/swiper-bundle.min.css',
        'assets/css/vendor/tipped.min.css',
        'assets/css/app.css',
        'assets/css/mango-overrides.css',
        'tutorial/assets/tutorial.css',
    ] as $stylesheet) {
        echo '<link rel="stylesheet" href="' . mango_e($stylesheet) . '">';
    }

    if ($schema !== []) {
        echo '<script type="application/ld+json">' .
            json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP) .
            '</script>';
    }

    mango_google_site_tools_head();
    echo '</head><body class="sticky-header">';
    mango_google_site_tools_body();
    echo '<div id="edublink-preloader"><div class="loading-spinner"><div class="preloader-spin-1"></div><div class="preloader-spin-2"></div></div><div class="preloader-close-btn-wraper"><span class="btn btn-primary preloader-close-btn">Cancel Preloader</span></div></div>';
    echo '<div id="main-wrapper" class="main-wrapper">';
}

function mango_tutorial_render_start(array $meta): void
{
    mango_tutorial_render_head($meta);
    require __DIR__ . '/../includes/header.php';
}

function mango_tutorial_render_end(): void
{
    require __DIR__ . '/../includes/footer.php';
}

function mango_tutorial_breadcrumb(array $items): void
{
    echo '<nav class="tutorial-breadcrumb" aria-label="Breadcrumb"><ol>';
    foreach ($items as $index => $item) {
        $label = mango_e((string) $item['label']);
        $href = $item['href'] ?? null;
        if ($href && $index < count($items) - 1) {
            echo '<li><a href="' . mango_e((string) $href) . '">' . $label . '</a></li>';
        } else {
            echo '<li aria-current="page">' . $label . '</li>';
        }
    }
    echo '</ol></nav>';
}

function mango_tutorial_breadcrumb_schema(array $items): array
{
    $list = [];
    foreach ($items as $index => $item) {
        $node = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => (string) $item['label'],
        ];
        if (!empty($item['href'])) {
            $node['item'] = MANGO_SITE_URL . '/' . ltrim((string) $item['href'], '/');
        }
        $list[] = $node;
    }

    return [
        '@type' => 'BreadcrumbList',
        'itemListElement' => $list,
    ];
}
