<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/global.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$result = $userTools->login($email, $password);

	if ($result === 'Успешная авторизация!') {
		echo 'success';
	} else {
		echo $result;
	}
}
