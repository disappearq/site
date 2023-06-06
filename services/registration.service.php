<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/global.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$patronymic = $_POST['patronymic'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	$result = $userTools->register($name, $surname, $patronymic, $phone, $email, $password1, $password2);

	if ($result === 'Успешная регистрация!') {
		echo 'success';
	} else {
		echo $result;
	}
}
