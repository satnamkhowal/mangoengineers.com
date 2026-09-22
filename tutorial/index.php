<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/template.php';
require_once __DIR__ . '/data/tutorials.php';

$tracks = mango_tutorial_tracks();
$planned = mango_tutorial_planned_tracks();
$canonical = MANGO_SITE_URL . '/tutorial/';
$items = [];
$position = 1;
foreach ($tracks as $slug => $track) {
    $items[] = [
        '@type' => 'ListItem',
        'position' => $position++,
        'url' => MANGO_SITE_URL . '/tutorial/' . $slug . '/',
        'name' => $track['title'],
    ];
}

$meta = [
    'title' => 'Free Programming & Technology Tutorials | Mango Engineers',
    'description' => 'Learn Python, Java, JavaScript, SQL, Linux and more through structured free tutorials with examples, practice tasks and learning roadmaps by Mango Engineers.',
    'canonical' => $canonical,
    'robots' => 'index,follow',
    'schema' => [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'CollectionPage',
                '@id' => $canonical . '#page',
                'url' => $canonical,
                'name' => 'Mango Engineers Free Tutorials',
                'description' => 'Structured programming and technology tutorials with examples and practice tasks.',
            ],
            [
                '@type' => 'ItemList',
                '@id' => $canonical . '#tutorials',
                'itemListElement' => $items,
            ],
        ],
    ],
];

mango_tutorial_render_start($meta);
?>
<section class="tutorial-hero">
    <div class="container">
        <?php mango_tutorial_breadcrumb([
            ['label' => 'Home', 'href' => 'index.html'],
            ['label' => 'Tutorials'],
        ]); ?>
        <span class="pre-title">Free Learning Library</span>
        <h1 class="title">Programming & Technology Tutorials</h1>
        <p>Learn concepts step by step, practice with small tasks and move from fundamentals toward real development skills. The first published tracks focus on the technologies that connect directly to Mango Engineers' core programming, data and DevOps course clusters.</p>
        <div class="tutorial-search">
            <label class="visually-hidden" for="tutorial-filter">Search tutorials</label>
            <input id="tutorial-filter" type="search" placeholder="Search Python, Java, SQL, Linux..." autocomplete="off">
        </div>
    </div>
</section>

<section class="tutorial-section">
    <div class="container">
        <div class="section-title">
            <span class="pre-title">Start Learning</span>
            <h2 class="title">Published Tutorial Tracks</h2>
        </div>
        <div class="tutorial-grid" id="tutorial-grid">
            <?php foreach ($tracks as $slug => $track): ?>
                <article class="tutorial-card" data-title="<?= mango_e(strtolower($track['title'] . ' ' . $track['category'])) ?>">
                    <div class="tutorial-meta">
                        <span class="tutorial-pill"><?= mango_e($track['category']) ?></span>
                        <span class="tutorial-pill"><?= mango_e($track['level']) ?></span>
                    </div>
                    <h3><a href="tutorial/<?= mango_e($slug) ?>/"><?= mango_e($track['title']) ?></a></h3>
                    <p><?= mango_e($track['description']) ?></p>
                    <a class="edu-btn btn-small" href="tutorial/<?= mango_e($slug) ?>/">Start Tutorial <i class="icon-4"></i></a>
                </article>
            <?php endforeach; ?>
        </div>
        <p class="tutorial-empty" id="tutorial-empty">No published tutorial matches that search yet.</p>
    </div>
</section>

<section class="tutorial-section alt">
    <div class="container">
        <div class="section-title">
            <span class="pre-title">Expansion Roadmap</span>
            <h2 class="title">Tutorials Being Built Across the Course Catalogue</h2>
            <p>The library is being expanded technology by technology. These topics are mapped from the current Mango Engineers course catalogue so future content can be added without creating duplicate commercial course intent.</p>
        </div>
        <ul class="tutorial-roadmap">
            <?php foreach ($planned as $name): ?>
                <li><?= mango_e($name) ?></li>
            <?php endforeach; ?>
        </ul>
        <p class="tutorial-source-note">Quality rule: unfinished outlines stay out of the indexable tutorial set. A topic becomes a published tutorial only after it has original explanations, examples and practice tasks.</p>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('tutorial-filter');
    const cards = Array.from(document.querySelectorAll('#tutorial-grid .tutorial-card'));
    const empty = document.getElementById('tutorial-empty');
    input.addEventListener('input', function () {
        const term = input.value.trim().toLowerCase();
        let visible = 0;
        cards.forEach(function (card) {
            const show = !term || card.dataset.title.includes(term);
            card.style.display = show ? '' : 'none';
            if (show) visible += 1;
        });
        empty.style.display = visible ? 'none' : 'block';
    });
});
</script>
<?php mango_tutorial_render_end(); ?>
