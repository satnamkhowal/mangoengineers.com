<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/legacy-renderer.php';

$pageKey = strtolower((string) ($_GET['page'] ?? '404'));
$pageKey = preg_replace('/[^a-z0-9-]/', '', $pageKey) ?: '404';

render_legacy_page($pageKey);
