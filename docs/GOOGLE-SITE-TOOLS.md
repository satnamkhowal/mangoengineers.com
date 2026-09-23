# Google Site Tools — Mango Engineers

This repository is PHP/HTML, so WordPress Site Kit is not used. The equivalent setup is centralized in `includes/google-site-tools.php` and `assets/js/google-site-tools.js`.

## Activation

Use verified values from the Google account that owns Mango Engineers. Edit only these constants in `includes/google-site-tools.php`:

```php
const MANGO_GTM_ID = ''; // Example format: GTM-XXXXXXX
const MANGO_GA4_ID = ''; // Example format: G-XXXXXXXXXX
const MANGO_SEARCH_CONSOLE_VERIFICATION = ''; // HTML-tag verification token only
```

### Choose one analytics loading path

- If Google Tag Manager is used, set `MANGO_GTM_ID` and configure GA4 inside that GTM container.
- If GTM is not used, leave `MANGO_GTM_ID` blank and set `MANGO_GA4_ID` for direct GA4 loading.
- Do not configure the same GA4 web stream both directly and through GTM, or page views/events can be duplicated.

Search Console verification is independent. Put only the `content` token from Google's HTML meta-tag verification method into `MANGO_SEARCH_CONSOLE_VERIFICATION`.

## Events

The loader exposes these privacy-safe events when analytics is active:

- `phone_click` — click on a `tel:` link.
- `email_click` — click on a `mailto:` link.
- `whatsapp_click` — click to `wa.me` or `whatsapp.com` if such links are present.
- `lead_submit` — submit attempt from the contact/enquiry form.
- `generate_lead` — successful contact redirect detected with `?sent=1`.

No form values, names, phone numbers, email addresses, messages or course-interest values are sent by this tracking layer.

## Verification checklist

1. Keep IDs blank during code review; the loader remains inert.
2. After inserting verified IDs, deploy one coherent repository snapshot.
3. View page source and confirm the Search Console meta tag appears once when configured.
4. If using GTM, use GTM Preview and verify one container load and the interaction events.
5. If using direct GA4, use GA4 Realtime/DebugView and verify one page view plus the expected interaction event.
6. Submit one authorized synthetic enquiry only after the production contact handler is healthy; verify `generate_lead` separately from the submit-attempt event.
7. Never send lead field values as analytics event parameters.

## Current repository limitation

The repository work does not prove production deployment. The project currently tracks production deployment/runtime problems separately, so analytics should not be marked live until the deployed site is synchronized and verified.
