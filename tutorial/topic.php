<?php
declare(strict_types=1);

require_once __DIR__ . '/template.php';
require_once __DIR__ . '/tutorials.php';

$slug = strtolower((string) ($_GET['slug'] ?? ''));
$tracks = mango_tutorial_tracks();

if (!isset($tracks[$slug])) {
    http_response_code(404);
    require __DIR__ . '/../404.php';
    exit;
}

$track = $tracks[$slug];
$canonical = MANGO_SITE_URL . '/tutorial/' . rawurlencode($slug) . '/';
$breadcrumbs = [
    ['label' => 'Home', 'href' => 'index.html'],
    ['label' => 'Tutorials', 'href' => 'tutorial/'],
    ['label' => $track['title']],
];

$meta = [
    'title' => $track['title'] . ' - Free Step-by-Step Guide | Mango Engineers',
    'description' => $track['description'],
    'canonical' => $canonical,
    'robots' => 'index,follow',
    'schema' => [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'TechArticle',
                '@id' => $canonical . '#article',
                'headline' => $track['title'],
                'description' => $track['description'],
                'url' => $canonical,
                'author' => ['@type' => 'Organization', 'name' => MANGO_SITE_NAME, 'url' => MANGO_SITE_URL],
                'publisher' => ['@type' => 'Organization', 'name' => MANGO_SITE_NAME, 'url' => MANGO_SITE_URL],
                'educationalLevel' => $track['level'],
                'about' => $track['category'],
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
        <span class="pre-title"><?= mango_e($track['category']) ?> Tutorial</span>
        <h1 class="title"><?= mango_e($track['title']) ?></h1>
        <p><?= mango_e($track['intro']) ?></p>
        <div class="tutorial-meta">
            <span class="tutorial-pill"><?= mango_e($track['level']) ?></span>
            <span class="tutorial-pill"><?= count($track['chapters']) ?> chapters</span>
            <span class="tutorial-pill">Examples + Practice</span>
        </div>
    </div>
</section>

<section class="tutorial-section">
    <div class="container tutorial-layout">
        <main class="tutorial-content">
            <h2>What You Will Learn</h2>
            <ul class="tutorial-list">
                <?php foreach ($track['outcomes'] as $item): ?>
                    <li><?= mango_e($item) ?></li>
                <?php endforeach; ?>
            </ul>

            <h2>Prerequisites</h2>
            <ul class="tutorial-list">
                <?php foreach ($track['prerequisites'] as $item): ?>
                    <li><?= mango_e($item) ?></li>
                <?php endforeach; ?>
            </ul>

            <h2>Course Chapters</h2>
            <div class="tutorial-grid">
                <?php $chapterNumber = 1; foreach ($track['chapters'] as $chapterSlug => $chapter): ?>
                    <article class="tutorial-card">
                        <div class="tutorial-meta"><span class="tutorial-pill">Chapter <?= $chapterNumber++ ?></span></div>
                        <h3><a href="tutorial/<?= mango_e($slug) ?>/<?= mango_e($chapterSlug) ?>/"><?= mango_e($chapter['title']) ?></a></h3>
                        <p><?= mango_e($chapter['summary']) ?></p>
                        <a href="tutorial/<?= mango_e($slug) ?>/<?= mango_e($chapterSlug) ?>/">Read Chapter →</a>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="tutorial-course-cta">
                <h3>Want Guided Classroom or Mentor-Led Training?</h3>
                <p>This free tutorial teaches the fundamentals. For structured training, projects and instructor guidance, review the related Mango Engineers course page.</p>
                <a href="<?= mango_e($track['course_url']) ?>">View related course details</a>
            </div>
        </main>

        <aside class="tutorial-sidebar">
            <strong><?= mango_e($track['title']) ?> Chapters</strong>
            <ul>
                <?php foreach ($track['chapters'] as $chapterSlug => $chapter): ?>
                    <li><a href="tutorial/<?= mango_e($slug) ?>/<?= mango_e($chapterSlug) ?>/"><?= mango_e($chapter['title']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>
</section>
<?php mango_tutorial_render_end(); ?>
