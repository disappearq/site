<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/renderTemplate.php';

$thisPage = renderTemplate('../templates/site/dashboard.template.php', ['fullname' => $fullname]);
$thisLayout = renderTemplate('../templates/layouts/app.template.php', ['brand' => $brand, 'email' => $email, 'tel' => $tel, 'content' => $thisPage]);

print $thisLayout;
