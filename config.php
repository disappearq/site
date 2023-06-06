<?php

$brand = 'Мой зубной';

if (isset($_SESSION['USER'])) {
	$surname = $_SESSION['USER']['patient_surname'];
	$name = $_SESSION['USER']['patient_name'];
	$patronymic = $_SESSION['USER']['patient_patronymic'];
	$fullname = $surname . ' ' . $name . ' ' . $patronymic;

	$birthday = $_SESSION['USER']['birthday'];

	$serial = $_SESSION['USER']['passport_serial'];
	$number = $_SESSION['USER']['passport_number'];
	$issueDate = $_SESSION['USER']['passport_issue_date'];
	$issueOrg = $_SESSION['USER']['passport_issue_org'];
	$passportSerial = 'Серия/Номер: ' . $serial . ' ' . $number;

	$city = $_SESSION['USER']['city_id'];
	$street = $_SESSION['USER']['street_name'];
	$house = $_SESSION['USER']['house_number'];
	$flat = $_SESSION['USER']['flat_number'];

	$tel = $_SESSION['USER']['phone'];
	$email = $_SESSION['USER']['email'];

	$verified = $_SESSION['USER']['verified'];
} elseif (isset($_SESSION['STAFF'])) {
	$surname = $_SESSION['STAFF']['staff_surname'];
	$name = $_SESSION['STAFF']['staff_name'];
	$patronymic = $_SESSION['STAFF']['staff_patronymic'];
	$fullname = $surname . ' ' . $name . ' ' . $patronymic;

	$birthday = $_SESSION['STAFF']['birthday'];

	$serial = $_SESSION['STAFF']['passport_serial'];
	$number = $_SESSION['STAFF']['passport_number'];
	$issueDate = $_SESSION['STAFF']['passport_issue_date'];
	$issueOrg = $_SESSION['STAFF']['passport_issue_org'];
	$passportSerial = 'Серия/Номер: ' . $serial . ' ' . $number;

	$city = $_SESSION['STAFF']['city_id'];
	$street = $_SESSION['STAFF']['street_name'];
	$house = $_SESSION['STAFF']['house_number'];
	$flat = $_SESSION['STAFF']['flat_number'];

	$tel = $_SESSION['STAFF']['phone'];
	$email = $_SESSION['STAFF']['email'];

	$verified = $_SESSION['STAFF']['verified'];
}
