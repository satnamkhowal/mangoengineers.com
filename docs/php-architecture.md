# Mango Engineers PHP architecture

The public site keeps the existing root-level `.html` URLs for compatibility, but those requests are now served through PHP.

## Shared files

- `includes/head.php` — shared document head, SEO tags, canonical, Open Graph, Twitter metadata and JSON-LD.
- `includes/header.php` — shared desktop/mobile Mango Engineers navigation.
- `includes/footer.php` — shared footer, official social links, Jaipur branch details and common JavaScript.
- `includes/site-config.php` — official site, social and branch configuration.
- `includes/page-config.php` — unique metadata and schema configuration for every public page.
- `includes/legacy-renderer.php` — safely extracts each existing page body while replacing the duplicated legacy header/footer at runtime.
- `index.php` — homepage entry point.
- `page.php` — validated renderer for existing page slugs.
- `.htaccess` — preserves existing `.html` URLs and routes them into PHP.

## URL policy

Existing public links such as `about-one.html`, `course-one.html` and `contact-us.html` do not change.

The broken mirrored placeholders `blog.html` and `index-one.html` redirect to `blog-standard.html` and `index.html` respectively.

## SEO policy

Every page key has its own title, description, canonical URL, robots directive and schema page identity. Common EducationalOrganization, WebSite and breadcrumb entities are generated consistently.

Template/demo variants are generally marked `noindex,follow` until their content is converted from the original theme copy into real Mango Engineers content.
