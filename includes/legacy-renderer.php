<?php
declare(strict_types=1);

require_once __DIR__ . '/site-config.php';
require_once __DIR__ . '/page-config.php';

function render_legacy_page(string $pageKey): void
{
    if ($pageKey === 'blog') {
        header('Location: /blog-standard.html', true, 301);
        exit;
    }

    if ($pageKey === 'index-one') {
        header('Location: /', true, 301);
        exit;
    }

    $pagePath = dirname(__DIR__) . '/pages/' . $pageKey . '.php';

    if (!is_file($pagePath)) {
        http_response_code(404);
        $pageKey = '404';
        $pagePath = dirname(__DIR__) . '/pages/404.php';
    }

    $page = mango_page_config($pageKey);
    $bodyClass = 'sticky-header';
    $minimalLayout = $pageKey === 'coming-soon';
    $showSiteFooter = !$minimalLayout;

    require __DIR__ . '/head.php';

    if (!$minimalLayout) {
        require __DIR__ . '/header.php';
    }

    require $pagePath;

    require __DIR__ . '/footer.php';
}
