<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/renderTemplate.php';

if (!empty($_SESSION['USER']) || !empty($_SESSION['STAFF'])) {
	if (session_status() == PHP_SESSION_ACTIVE && empty($_SESSION['USER']) && empty($_SESSION['STAFF'])) {
		header('Location: /dashboard');
		exit(0);
	}
}

$conn = mysqli_connect('127.0.0.1', 'root', '', 'dentistry') or die('Error: ' . mysqli_error($conn));

$query = "SELECT * FROM `patients` WHERE `testimonial` <> '' LIMIT 3";
$patients_result = mysqli_query($conn, $query);

$thisPage = renderTemplate('templates/site/index.template.php', ['brand' => $brand, 'patients_result' => $patients_result]);
$thisLayout = renderTemplate('templates/layouts/landing.template.php', ['brand' => $brand, 'content' => $thisPage]);

print $thisLayout;
