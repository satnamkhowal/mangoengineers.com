# Mango Engineers Integration Queue

Shared/global changes that need integration-owner review should be recorded here. Keep entries explicit and scoped.


## ME-LEAD-001 — Contact enquiry delivery verification

- Branch: `ai/fix-contact-lead-form`
- Code impact: adds verified contact email to shared site config, replaces demo contact page content, and adds root `mail.php` enquiry handler.
- Integration/deployment requirement: after merge and deployment, verify the production host can send mail using PHP `mail()` with the domain sender. If Hostinger blocks or rewrites PHP mail, switch the handler to the project's authenticated SMTP/mail transport rather than using an external demo endpoint.
- Recipient defaults to `info@mangoengineers.com`; `MANGO_LEAD_EMAIL` may override only the recipient.
- Do not use real customer data for testing; use an authorized test enquiry.
- Do not mark the task live until delivery is confirmed on the deployed host.
