<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/session.php';
require_once __DIR__ . '/includes/SiteComponents.php';
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PHPMailer\PHPMailer\PHPMailer;

const CONTACT_RECIPIENT = 'hipolito.markjoseph@gmail.com';

function renderResult(int $statusCode, string $title, string $message): void
{
    http_response_code($statusCode);
    header('Content-Type: text/html; charset=UTF-8');

    $safeTitle = htmlspecialchars($title, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeMessage = htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $resultRole = $statusCode >= 400 ? 'alert' : 'status';
    ob_start();
    SiteComponents::renderNavbar('login');
    $navbar = ob_get_clean();
    ob_start();
    SiteComponents::renderFooter('lexsys_technologies@yahoo.com');
    $footer = ob_get_clean();

    echo <<<HTML
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$safeTitle} | LEXSYS TECHNOLOGIES, INC.</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="top">
    {$navbar}
    <main>
      <section class="contact-hero" aria-labelledby="contact-result-title">
        <div class="contact-hero-inner login-hero-inner">
          <div class="contact-intro">
            <h1 id="contact-result-title">Contact <span>Us</span></h1>
            <p>Your message status is shown here. If you need help, get in touch with our team.</p>
            <a href="mailto:hipolito.markjoseph@gmail.com">hipolito.markjoseph@gmail.com</a>
          </div>
          <section class="contact-form login-form" aria-labelledby="contact-result-heading">
            <h2 id="contact-result-heading">{$safeTitle}</h2>
            <p role="{$resultRole}">{$safeMessage}</p>
            <a class="sent-contact-btn" href="contact.php">Return to Contact Us</a>
          </section>
        </div>
      </section>
      {$footer}
    </main>
    <script src="index.js"></script>
  </body>
</html>
HTML;
    exit;
}

$requestMethod = strtoupper(trim((string) ($_SERVER['REQUEST_METHOD'] ?? '')));

if ($requestMethod === 'GET' || $requestMethod === 'HEAD') {
    header('Location: contact.php', true, 303);
    exit;
}

if ($requestMethod !== 'POST') {
    header('Allow: POST');
    renderResult(405, 'Method not allowed', 'Submit the contact form to send a message.');
}

if (!empty($_POST['website'])) {
    renderResult(400, 'Unable to submit', 'The form could not be processed. Please try again.');
}

$firstName = $_POST['first_name'] ?? '';
$lastName = $_POST['last_name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

if (
    !is_string($firstName) ||
    !is_string($lastName) ||
    !is_string($email) ||
    !is_string($phone) ||
    !is_string($message)
) {
    renderResult(422, 'Check your form', 'Some fields are missing or invalid. Return to the form and review your entries.');
}

$firstName = trim($firstName);
$lastName = trim($lastName);
$email = trim($email);
$phone = trim($phone);
$message = trim($message);

if (
    $firstName === '' ||
    $lastName === '' ||
    strlen($firstName) > 100 ||
    strlen($lastName) > 100 ||
    filter_var($email, FILTER_VALIDATE_EMAIL) === false ||
    strlen($email) > 254 ||
    strlen($phone) > 40 ||
    $message === '' ||
    strlen($message) > 5000
) {
    renderResult(422, 'Check your form', 'Some fields are missing or invalid. Return to the form and review your entries.');
}

$firstName = preg_replace('/[\r\n]+/', ' ', $firstName) ?? '';
$lastName = preg_replace('/[\r\n]+/', ' ', $lastName) ?? '';
$phone = preg_replace('/[\r\n]+/', ' ', $phone) ?? '';
$message = str_replace(["\r\n", "\r"], "\n", $message);

$subject = 'Website contact form submission';
$body = implode("\n", [
    "Name: {$firstName} {$lastName}",
    "Email: {$email}",
    'Phone: ' . ($phone !== '' ? $phone : 'Not provided'),
    '',
    'Message:',
    $message,
]);
$smtpUsername = getenv('GMAIL_SMTP_USERNAME');
$smtpAppPassword = getenv('GMAIL_SMTP_APP_PASSWORD');

if (
    $smtpUsername === false ||
    $smtpUsername === '' ||
    filter_var($smtpUsername, FILTER_VALIDATE_EMAIL) === false ||
    $smtpAppPassword === false ||
    $smtpAppPassword === ''
) {
    error_log('Contact form email was not sent: Gmail SMTP credentials are not configured.');
    renderResult(500, 'Message not sent', 'Email delivery is not configured. Please try again later or email us directly.');
}

$mailer = new PHPMailer(true);

try {
    $mailer->isSMTP();
    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = $smtpUsername;
    $mailer->Password = $smtpAppPassword;
    $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mailer->Port = 587;
    $mailer->CharSet = PHPMailer::CHARSET_UTF8;
    $mailer->setFrom($smtpUsername, 'Lexsys Website');
    $mailer->addAddress(CONTACT_RECIPIENT);
    $mailer->addReplyTo($email, "{$firstName} {$lastName}");
    $mailer->Subject = $subject;
    $mailer->Body = $body;
    $mailer->send();
} catch (PHPMailerException $exception) {
    error_log('Contact form email could not be sent via Gmail SMTP: ' . $mailer->ErrorInfo);
    renderResult(500, 'Message not sent', 'We could not send your message right now. Please try again later or email us directly.');
}

renderResult(200, 'Message submitted', 'Thank you. Your message has been submitted, and our team will be in touch.');
