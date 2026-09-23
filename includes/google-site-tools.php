<?php
declare(strict_types=1);

/**
 * Mango Engineers Google site tools configuration.
 *
 * Keep these blank until the exact IDs are verified in the owning Google account.
 * Prefer GTM when both GTM and GA4 are available so GA4 is not loaded twice.
 */
const MANGO_GTM_ID = '';
const MANGO_GA4_ID = '';
const MANGO_SEARCH_CONSOLE_VERIFICATION = '';

function mango_google_valid_gtm_id(string $value): bool
{
    return preg_match('/^GTM-[A-Z0-9]+$/i', trim($value)) === 1;
}

function mango_google_valid_ga4_id(string $value): bool
{
    return preg_match('/^G-[A-Z0-9]+$/i', trim($value)) === 1;
}

function mango_google_valid_search_console_token(string $value): bool
{
    return preg_match('/^[A-Za-z0-9_-]{10,}$/', trim($value)) === 1;
}

function mango_google_site_tools_head(): void
{
    $gtmId = trim(MANGO_GTM_ID);
    $ga4Id = trim(MANGO_GA4_ID);
    $verification = trim(MANGO_SEARCH_CONSOLE_VERIFICATION);

    if (mango_google_valid_search_console_token($verification)) {
        echo '    <meta name="google-site-verification" content="' . mango_e($verification) . '">' . "\n";
    }

    $config = [
        'gtmId' => mango_google_valid_gtm_id($gtmId) ? $gtmId : '',
        'ga4Id' => mango_google_valid_ga4_id($ga4Id) ? $ga4Id : '',
    ];

    echo '    <script>window.MangoGoogleSiteTools=' .
        json_encode($config, JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) .
        ';</script>' . "\n";
    echo '    <script defer src="/assets/js/google-site-tools.js"></script>' . "\n";
}

function mango_google_site_tools_body(): void
{
    $gtmId = trim(MANGO_GTM_ID);

    if (!mango_google_valid_gtm_id($gtmId)) {
        return;
    }

    $src = 'https://www.googletagmanager.com/ns.html?id=' . rawurlencode($gtmId);
    echo '    <noscript><iframe src="' . mango_e($src) . '" height="0" width="0" style="display:none;visibility:hidden" aria-hidden="true"></iframe></noscript>' . "\n";
}
