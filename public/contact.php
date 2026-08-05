<?php
/**
 * Contact form handler for toyinetiko.co.uk.
 *
 * Astro's static build copies everything in /public verbatim into /dist,
 * so this file is deployed alongside the generated HTML. It requires no
 * third-party account or API key — it uses PHP's built-in mail() function,
 * which 123-reg shared hosting supports out of the box.
 */

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

function respond(int $status, array $payload): void
{
	http_response_code($status);
	echo json_encode($payload);
	exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	respond(405, ['ok' => false, 'error' => 'Method not allowed']);
}

// Honeypot: bots tend to fill every field, humans never see/fill this one.
if (!empty($_POST['_gotcha'])) {
	// Pretend success so bots don't learn the honeypot rejected them.
	respond(200, ['ok' => true]);
}

$name = trim((string) ($_POST['name'] ?? ''));
$replyTo = trim((string) ($_POST['_replyto'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

$errors = [];
if ($name === '') {
	$errors[] = 'Name is required.';
}
if ($replyTo === '' || !filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
	$errors[] = 'A valid email address is required.';
}
if ($message === '') {
	$errors[] = 'Message is required.';
}

if ($errors) {
	respond(422, ['ok' => false, 'errors' => $errors]);
}

$to = 'etiko.toyin@gmail.com';
$subject = 'New enquiry from toyinetiko.co.uk';

// Strip newlines from user input to prevent header injection.
$safeName = str_replace(["\r", "\n"], '', $name);
$safeReplyTo = str_replace(["\r", "\n"], '', $replyTo);

$body = "Name: {$safeName}\n" . "Email: {$safeReplyTo}\n\n" . "Message:\n{$message}\n";

$headers = [
	'From: Toyin Etiko Website <no-reply@toyinetiko.co.uk>',
	"Reply-To: {$safeName} <{$safeReplyTo}>",
	'Content-Type: text/plain; charset=UTF-8',
];

$sent = mail($to, $subject, $body, implode("\r\n", $headers));

if ($sent) {
	respond(200, ['ok' => true]);
}

respond(502, ['ok' => false, 'error' => 'Unable to send message']);
