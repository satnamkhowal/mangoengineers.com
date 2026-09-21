<?php
declare(strict_types=1);

require_once __DIR__ . '/site-config.php';
require_once __DIR__ . '/page-config.php';

function mango_extract_body_class(string $html): string
{
    if (preg_match('/<body[^>]*class=["\']([^"\']+)["\']/i', $html, $match)) {
        return trim($match[1]);
    }

    return 'sticky-header';
}

function mango_extract_main_content(string $html, bool $minimalLayout = false): string
{
    if (!$minimalLayout) {
        $headerEnd = stripos($html, '</header>');
        $footerStart = stripos($html, '<footer');

        if ($headerEnd !== false && $footerStart !== false && $footerStart > $headerEnd) {
            return substr($html, $headerEnd + strlen('</header>'), $footerStart - ($headerEnd + strlen('</header>')));
        }
    }

    if (preg_match('/<div\s+id=["\']main-wrapper["\'][^>]*>([\s\S]*?)<div\s+class=["\']rn-progress-parent["\']/i', $html, $match)) {
        $content = $match[1];
        $content = preg_replace('/<\/div>\s*$/', '', $content, 1) ?? $content;
        return $content;
    }

    if (preg_match('/<body[^>]*>([\s\S]*?)<\/body>/i', $html, $match)) {
        return $match[1];
    }

    return $html;
}

function mango_normalize_legacy_content(string $content): string
{
    $replacements = [
        'href="index-2.html"' => 'href="index.html"',
        "href='index-2.html'" => "href='index.html'",
        'href="index-one.html"' => 'href="index.html"',
        "href='index-one.html'" => "href='index.html'",
        'href="blog.html"' => 'href="blog-standard.html"',
        "href='blog.html'" => "href='blog-standard.html'",
    ];

    return strtr($content, $replacements);
}

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

    $legacyPath = dirname(__DIR__) . '/' . $pageKey . '.html';

    if (!is_file($legacyPath)) {
        http_response_code(404);
        $pageKey = '404';
        $legacyPath = dirname(__DIR__) . '/404.html';
    }

    $legacyHtml = (string) file_get_contents($legacyPath);
    $page = mango_page_config($pageKey);
    $bodyClass = mango_extract_body_class($legacyHtml);
    $minimalLayout = $pageKey === 'coming-soon';
    $showSiteFooter = !$minimalLayout;
    $content = mango_normalize_legacy_content(
        mango_extract_main_content($legacyHtml, $minimalLayout)
    );

    require __DIR__ . '/head.php';

    if (!$minimalLayout) {
        require __DIR__ . '/header.php';
    }

    echo $content;

    require __DIR__ . '/footer.php';
}
