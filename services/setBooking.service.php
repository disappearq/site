<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/global.inc.php';

$surname = $_SESSION['USER']['patient_surname'] ?? $_POST['surname'];
$name = $_SESSION['USER']['patient_name'] ?? $_POST['name'];
$patronymic = $_SESSION['USER']['patient_patronymic'] ?? $_POST['patronymic'];
$phone = $_SESSION['USER']['phone'] ?? $_POST['phone'];

$result = $dataTools->setBooking(
	$surname,
	$name,
	$patronymic,
	$phone,
	$_POST['filial_id'],
	$_POST['service_id'],
	$_POST['doctor_id'],
	$_POST['date'],
	$_POST['time']
);

echo $result;
