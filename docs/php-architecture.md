# Mango Engineers PHP architecture

The website is now PHP-driven end to end. Existing public `.html` URLs remain stable for compatibility, but root HTML source files are no longer required.

## Shared files

- `includes/head.php` — shared document head, unique SEO metadata, canonical, Open Graph, Twitter metadata and JSON-LD.
- `includes/header.php` — shared desktop/mobile Mango Engineers navigation.
- `includes/footer.php` — shared footer, official social links, Jaipur branch details and common JavaScript.
- `includes/site-config.php` — official site, social, phone and branch configuration.
- `includes/page-config.php` — unique metadata and schema identity for each configured page.
- `includes/legacy-renderer.php` — shared page renderer retained under its original filename for wrapper compatibility; it now loads PHP page partials directly and no longer reads HTML files.
- `pages/*.php` — page-specific body markup.
- root `*.php` files — public PHP counterparts for each former HTML page.
- `.htaccess` — preserves existing public `.html` URLs by internally rewriting them to the matching PHP page.

## URL policy

Existing public links such as `about-one.html`, `course-one.html` and `contact-us.html` remain unchanged from a visitor/search-engine perspective.

The broken mirrored placeholders `blog.html` and `index-one.html` redirect to `blog-standard.html` and `index.html` respectively.

## SEO policy

Every configured page has its own title, description, canonical URL, robots directive and page schema identity. Common EducationalOrganization, WebSite and breadcrumb entities are generated consistently.

Template/demo variants remain `noindex,follow` until their body content is replaced with final Mango Engineers copy.
