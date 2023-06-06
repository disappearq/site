<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/global.inc.php';

echo $dataTools->getAllDoctorsByFillial($_POST['filial_id']);
