<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/global.inc.php';

$result = $userTools->logout();

if ($result === 'Успешный выход!') {
	echo 'success';
} else {
	echo $result;
}
