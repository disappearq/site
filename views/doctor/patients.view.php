<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/renderTemplate.php';

$conn = mysqli_connect('127.0.0.1', 'root', '', 'dentistry') or die('Error: ' . mysqli_error($conn));

$filial_id = $_SESSION['STAFF']['filial_id'];
$query = "SELECT * FROM filials WHERE id = $filial_id";
$filial_data = mysqli_fetch_assoc(mysqli_query($conn, $query));

$staff_id = $_SESSION['STAFF']['id'];
$default_limit = 10;
$limit_num = !empty($_GET['limit']) && $_GET['limit'] >= 1 ? $_GET['limit'] : $default_limit;
$offset = !empty($_GET['page']) ? ($_GET['page'] - 1) * $limit_num : 0;
$filter = "WHERE b.staff_id = $staff_id ORDER BY `patient_surname` ASC LIMIT $offset, $limit_num";
$total = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `bookings` AS b $filter"))[0];
$pages = ceil($total / $limit_num);
$page = !empty($_GET['page']) ? $_GET['page'] : 1;
$page = is_numeric($page) && $page >= 1 ? min([$page, $pages]) : 1;
$_GET['page'] = $page;

$query = "SELECT res.phone AS phone2, p.* FROM
    (SELECT DISTINCT b.phone FROM `bookings` AS b
        $filter) AS res
    LEFT JOIN patients AS p ON p.phone = res.phone";
$patients = mysqli_query($conn, $query);

$thisPage = renderTemplate('../../templates/site/doctor/patients.template.php', [
	'patients_result' => $patients,
	'total' => $total,
	'pages' => $pages,
	'page' => $page
]);
$thisLayout = renderTemplate('../../templates/layouts/app.template.php', ['brand' => $brand, 'email' => $email, 'content' => $thisPage]);

print $thisLayout;
