<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/site-config.php';

$isAjax = strtolower((string) ($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '')) === 'xmlhttprequest';

function mango_form_respond(array $payload, bool $isAjax): never
{
    if ($isAjax) {
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        exit;
    }

    $target = ($payload['code'] ?? false) === true
        ? 'contact-us.html?sent=1'
        : 'contact-us.html?error=1';

    header('Location: ' . $target, true, 303);
    exit;
}

function mango_form_value(string $key, int $maxLength = 2000): string
{
    $value = trim((string) ($_POST[$key] ?? ''));
    $value = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $value) ?? '';
    return function_exists('mb_substr') ? mb_substr($value, 0, $maxLength) : substr($value, 0, $maxLength);
}

function mango_form_error(string $field, string $message, bool $isAjax): never
{
    mango_form_respond([
        'code' => false,
        'field' => $field,
        'err' => $message,
    ], $isAjax);
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    if ($isAjax) {
        header('Allow: POST');
        mango_form_error('contact-message', 'Please submit the enquiry form from the website.', true);
    }

    header('Location: contact-us.html', true, 303);
    exit;
}

$origin = trim((string) ($_SERVER['HTTP_ORIGIN'] ?? ''));
$referer = trim((string) ($_SERVER['HTTP_REFERER'] ?? ''));
$requestSource = $origin !== '' ? $origin : $referer;

if ($requestSource !== '') {
    $host = strtolower((string) parse_url($requestSource, PHP_URL_HOST));
    if (!in_array($host, ['mangoengineers.com', 'www.mangoengineers.com'], true)) {
        mango_form_error('contact-message', 'Please submit the enquiry directly from mangoengineers.com.', $isAjax);
    }
}

$honeypot = mango_form_value('website', 200);
if ($honeypot !== '') {
    mango_form_respond([
        'code' => true,
        'success' => 'Thank you. Your enquiry has been received.',
    ], $isAjax);
}

session_name('mango_enquiry');
session_start();

$now = time();
$lastSubmission = (int) ($_SESSION['last_enquiry_submission'] ?? 0);
if ($lastSubmission > 0 && ($now - $lastSubmission) < 20) {
    mango_form_error('contact-phone', 'Please wait a few seconds before sending another enquiry.', $isAjax);
}

$name = mango_form_value('contact-name', 80);
$phone = mango_form_value('contact-phone', 20);
$email = mango_form_value('contact-email', 120);
$interest = mango_form_value('contact-interest', 120);
$message = mango_form_value('contact-message', 2000);
$source = mango_form_value('contact-source', 200);
$consent = mango_form_value('contact-consent', 10);

if ((function_exists('mb_strlen') ? mb_strlen($name) : strlen($name)) < 2) {
    mango_form_error('contact-name', 'Please enter your name.', $isAjax);
}

$phoneDigits = preg_replace('/\D+/', '', $phone) ?? '';
if (strlen($phoneDigits) < 10 || strlen($phoneDigits) > 15) {
    mango_form_error('contact-phone', 'Please enter a valid phone number.', $isAjax);
}

if ($email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    mango_form_error('contact-email', 'Please enter a valid email address.', $isAjax);
}

$allowedInterests = [
    'Programming',
    'Full Stack Development',
    'Data Analytics / Power BI',
    'Data Science / AI / ML',
    'Cloud / DevOps',
    'Cyber Security',
    'Digital Marketing',
    'Internship / Career Program',
    'Other',
];

if (!in_array($interest, $allowedInterests, true)) {
    mango_form_error('contact-interest', 'Please choose a course or learning area.', $isAjax);
}

if ($consent !== 'yes') {
    mango_form_error('contact-consent', 'Please confirm that we may use your details to respond to this enquiry.', $isAjax);
}

$recipient = getenv('MANGO_LEAD_EMAIL') ?: MANGO_CONTACT_EMAIL;
$subjectName = preg_replace('/[\r\n]+/', ' ', $name) ?? 'Website enquiry';
$subjectInterest = preg_replace('/[\r\n]+/', ' ', $interest) ?? 'Course enquiry';
$subject = sprintf('Mango Engineers website enquiry: %s — %s', $subjectInterest, $subjectName);

$bodyLines = [
    'New website enquiry',
    '',
    'Name: ' . $name,
    'Phone: ' . $phone,
    'Email: ' . ($email !== '' ? $email : 'Not provided'),
    'Interest: ' . $interest,
    'Source: ' . ($source !== '' ? $source : 'Website'),
    'Submitted: ' . date('Y-m-d H:i:s T'),
    '',
    'Message:',
    $message !== '' ? $message : 'No message provided.',
];

$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: Mango Engineers Website <' . MANGO_CONTACT_EMAIL . '>',
];

if ($email !== '') {
    $headers[] = 'Reply-To: ' . $email;
}

$sent = @mail(
    $recipient,
    $subject,
    implode("\n", $bodyLines),
    implode("\r\n", $headers)
);

if (!$sent) {
    mango_form_error(
        'contact-message',
        'We could not send your enquiry right now. Please call ' . MANGO_PHONE_DISPLAY . ' or email ' . MANGO_CONTACT_EMAIL . '.',
        $isAjax
    );
}

$_SESSION['last_enquiry_submission'] = $now;

mango_form_respond([
    'code' => true,
    'success' => 'Thank you. Mango Engineers has received your enquiry and will respond using the contact details you provided.',
], $isAjax);
