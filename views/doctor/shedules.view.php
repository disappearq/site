<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/renderTemplate.php';

$conn = mysqli_connect('127.0.0.1', 'root', '', 'dentistry');
if (!$conn) {
    die('Error: ' . mysqli_connect_error());
}

$query = "SELECT * FROM filials AS f WHERE f.id = {$_SESSION['STAFF']['filial_id']}";
$filial_data = mysqli_fetch_assoc(mysqli_query($conn, $query));

$filter = "WHERE 1=1 and b.staff_id = {$_SESSION['STAFF']['id']}";
if (!isset($_GET['date_filter'])) {
    $date = date('Y-m-d');
    $_GET['date_filter'] = $date;
    $filter .= " and b.date = '{$date}'";
} elseif (isset($_GET['date_filter']) && $_GET['date_filter'] != '') {
    $filter .= " and b.date = '{$_GET['date_filter']}'";
}

$default_limit = 10;
if (isset($_GET['limit']) && $_GET['limit'] >= 1) {
    $limit_num = (int)$_GET['limit'];
} else {
    $limit_num = $default_limit;
}

$total_query = "SELECT COUNT(*) FROM bookings AS b {$filter}";
$total_result = mysqli_query($conn, $total_query);
$total_row = mysqli_fetch_row($total_result);
$total = $total_row[0];

$pages = ($limit_num > 0) ? ceil($total / $limit_num) : 1;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$page = max(1, min($page, $pages));

$_GET['page'] = $page;

$kolvo = $limit_num * ($page - 1);

$limit = "LIMIT {$kolvo}, {$limit_num}";

$query = "SELECT b.*, se.service_title FROM bookings AS b LEFT JOIN staffs AS st ON b.staff_id = st.id LEFT JOIN services AS se ON b.services_id = se.id {$filter} ORDER BY date ASC, time ASC {$limit}";

$bookings = mysqli_query($conn, $query);

$thisPage = renderTemplate('../../templates/site/doctor/shedules.template.php', [
    'bookings_result' => $bookings,
    'total' => $total,
    'pages' => $pages,
    'page' => $page
]);
$thisLayout = renderTemplate('../../templates/layouts/app.template.php', ['brand' => $brand, 'email' => $email, 'content' => $thisPage]);

print $thisLayout;
