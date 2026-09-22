<?php
declare(strict_types=1);

require_once __DIR__ . '/template.php';
require_once __DIR__ . '/tutorials.php';

$slug = strtolower((string) ($_GET['slug'] ?? ''));
$chapterSlug = strtolower((string) ($_GET['chapter'] ?? ''));
$tracks = mango_tutorial_tracks();

if (!isset($tracks[$slug]['chapters'][$chapterSlug])) {
    http_response_code(404);
    require __DIR__ . '/../404.php';
    exit;
}

$track = $tracks[$slug];
$chapter = $track['chapters'][$chapterSlug];
$chapterKeys = array_keys($track['chapters']);
$currentIndex = array_search($chapterSlug, $chapterKeys, true);
$previousSlug = $currentIndex > 0 ? $chapterKeys[$currentIndex - 1] : null;
$nextSlug = $currentIndex < count($chapterKeys) - 1 ? $chapterKeys[$currentIndex + 1] : null;

$canonical = MANGO_SITE_URL . '/tutorial/' . rawurlencode($slug) . '/' . rawurlencode($chapterSlug) . '/';
$breadcrumbs = [
    ['label' => 'Home', 'href' => 'index.html'],
    ['label' => 'Tutorials', 'href' => 'tutorial/'],
    ['label' => $track['title'], 'href' => 'tutorial/' . $slug . '/'],
    ['label' => $chapter['title']],
];

$meta = [
    'title' => $chapter['title'] . ' | ' . $track['title'] . ' | Mango Engineers',
    'description' => $chapter['summary'],
    'canonical' => $canonical,
    'robots' => 'index,follow',
    'schema' => [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'TechArticle',
                '@id' => $canonical . '#article',
                'headline' => $chapter['title'],
                'description' => $chapter['summary'],
                'url' => $canonical,
                'isPartOf' => ['@id' => MANGO_SITE_URL . '/tutorial/' . $slug . '/#article'],
                'author' => ['@type' => 'Organization', 'name' => MANGO_SITE_NAME, 'url' => MANGO_SITE_URL],
                'publisher' => ['@type' => 'Organization', 'name' => MANGO_SITE_NAME, 'url' => MANGO_SITE_URL],
                'educationalLevel' => $track['level'],
                'about' => $track['title'],
            ],
            mango_tutorial_breadcrumb_schema($breadcrumbs),
        ],
    ],
];

mango_tutorial_render_start($meta);
?>
<section class="tutorial-hero">
    <div class="container">
        <?php mango_tutorial_breadcrumb($breadcrumbs); ?>
        <span class="pre-title"><?= mango_e($track['title']) ?></span>
        <h1 class="title"><?= mango_e($chapter['title']) ?></h1>
        <p><?= mango_e($chapter['summary']) ?></p>
    </div>
</section>

<section class="tutorial-section">
    <div class="container tutorial-layout">
        <main class="tutorial-content">
            <h2>Concept</h2>
            <?php foreach ($chapter['explanation'] as $paragraph): ?>
                <p><?= mango_e($paragraph) ?></p>
            <?php endforeach; ?>

            <h2>Example</h2>
            <pre class="tutorial-code"><code><?= mango_e($chapter['example']) ?></code></pre>

            <div class="tutorial-note">
                Type the example yourself and change at least one value. Small experiments reveal syntax and behavior faster than passive reading.
            </div>

            <div class="tutorial-practice">
                <h2>Practice Tasks</h2>
                <ol>
                    <?php foreach ($chapter['practice'] as $task): ?>
                        <li><?= mango_e($task) ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>

            <h2>Key Takeaways</h2>
            <ul class="tutorial-list">
                <?php foreach ($chapter['takeaways'] as $item): ?>
                    <li><?= mango_e($item) ?></li>
                <?php endforeach; ?>
            </ul>

            <div class="tutorial-next">
                <div>
                    <?php if ($previousSlug !== null): $previous = $track['chapters'][$previousSlug]; ?>
                        <small>Previous</small><br>
                        <a href="tutorial/<?= mango_e($slug) ?>/<?= mango_e($previousSlug) ?>/">← <?= mango_e($previous['title']) ?></a>
                    <?php endif; ?>
                </div>
                <div class="text-end">
                    <?php if ($nextSlug !== null): $next = $track['chapters'][$nextSlug]; ?>
                        <small>Next</small><br>
                        <a href="tutorial/<?= mango_e($slug) ?>/<?= mango_e($nextSlug) ?>/"><?= mango_e($next['title']) ?> →</a>
                    <?php else: ?>
                        <small>Track complete</small><br>
                        <a href="tutorial/<?= mango_e($slug) ?>/">Back to <?= mango_e($track['title']) ?> →</a>
                    <?php endif; ?>
                </div>
            </div>
        </main>

        <aside class="tutorial-sidebar">
            <strong><?= mango_e($track['title']) ?> Chapters</strong>
            <ul>
                <?php foreach ($track['chapters'] as $itemSlug => $item): ?>
                    <li><a <?= $itemSlug === $chapterSlug ? 'aria-current="page"' : '' ?> href="tutorial/<?= mango_e($slug) ?>/<?= mango_e($itemSlug) ?>/"><?= mango_e($item['title']) ?></a></li>
                <?php endforeach; ?>
            </ul>
            <p class="mt--20"><a href="<?= mango_e($track['course_url']) ?>">Related Mango Engineers course →</a></p>
        </aside>
    </div>
</section>
<?php mango_tutorial_render_end(); ?>
