(() => {
    'use strict';

    const config = window.MangoGoogleSiteTools || {};
    const gtmId = typeof config.gtmId === 'string' ? config.gtmId.trim() : '';
    const ga4Id = typeof config.ga4Id === 'string' ? config.ga4Id.trim() : '';
    const hasGtm = /^GTM-[A-Z0-9]+$/i.test(gtmId);
    const hasGa4 = /^G-[A-Z0-9]+$/i.test(ga4Id);

    window.dataLayer = window.dataLayer || [];

    const loadGtm = (id) => {
        window.dataLayer.push({ 'gtm.start': Date.now(), event: 'gtm.js' });
        const script = document.createElement('script');
        script.async = true;
        script.src = 'https://www.googletagmanager.com/gtm.js?id=' + encodeURIComponent(id);
        document.head.appendChild(script);
    };

    const loadGa4 = (id) => {
        const script = document.createElement('script');
        script.async = true;
        script.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(id);
        document.head.appendChild(script);

        window.gtag = function () {
            window.dataLayer.push(arguments);
        };
        window.gtag('js', new Date());
        window.gtag('config', id);
    };

    if (hasGtm) {
        loadGtm(gtmId);
    } else if (hasGa4) {
        loadGa4(ga4Id);
    }

    const track = (eventName, params = {}) => {
        const safeParams = {
            page_path: window.location.pathname,
            ...params
        };

        if (hasGtm) {
            window.dataLayer.push({ event: eventName, ...safeParams });
        } else if (hasGa4 && typeof window.gtag === 'function') {
            window.gtag('event', eventName, safeParams);
        }
    };

    document.addEventListener('click', (event) => {
        const link = event.target.closest('a[href]');
        if (!link) return;

        const rawHref = link.getAttribute('href') || '';
        let parsedUrl;

        try {
            parsedUrl = new URL(link.href, window.location.href);
        } catch (_) {
            parsedUrl = null;
        }

        if (rawHref.startsWith('tel:')) {
            track('phone_click', { link_type: 'phone' });
            return;
        }

        if (rawHref.startsWith('mailto:')) {
            track('email_click', { link_type: 'email' });
            return;
        }

        if (parsedUrl && /(^|\.)wa\.me$|(^|\.)whatsapp\.com$/i.test(parsedUrl.hostname)) {
            track('whatsapp_click', { link_type: 'whatsapp' });
        }
    });

    document.addEventListener('submit', (event) => {
        const form = event.target;
        if (!(form instanceof HTMLFormElement)) return;

        const id = form.id || '';
        const name = form.getAttribute('name') || '';
        const action = form.getAttribute('action') || '';
        const isLeadForm = id === 'contact-form' || /contact|enquiry|inquiry|lead/i.test([id, name, action].join(' '));

        if (!isLeadForm) return;

        track('lead_submit', {
            form_id: id,
            form_name: name
        });
    }, true);

    const params = new URLSearchParams(window.location.search);
    if (params.get('sent') === '1') {
        track('generate_lead', { lead_source: 'contact_form_success' });
    }

    window.mangoTrack = track;
})();
