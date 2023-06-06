<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/db.class.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/userTools.class.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/dataTools.class.php';

$db = new Database('dentistry', 'root', '', '127.0.0.1');
$db->connect();

$userTools = new UserTools($db);
$dataTools = new DataTools($db);

session_start();
