<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/renderTemplate.php';

($conn = mysqli_connect('127.0.0.1', 'root', '', 'dentistry')) or die('Error: ' . mysqli_error($conn));

$query = "SELECT * FROM filials AS f WHERE f.id = " . $_SESSION['STAFF']['filial_id'];
$filial_data = mysqli_fetch_assoc(mysqli_query($conn, $query));

// Запрос на категории услуг
$query =
    "SELECT * FROM services_categories AS sc";
$services_categories = mysqli_fetch_all(mysqli_query($conn, $query), MYSQLI_ASSOC);

// Подготовка строки фильтра для запроса
$filter = 'WHERE 1';

$date_filter = '1';
if (!empty($_GET['startdate'])) $date_filter .= " AND lst.date >= '$_GET[startdate]'";
if (!empty($_GET['enddate'])) {
    if ($date_filter != '') $date_filter .= " AND lst.date <= '$_GET[enddate]'";
    else $date_filter .= "lst.date <= $_GET[enddate]";
}

$filter .= " AND (($date_filter))";

$query =
    "SELECT lst.id, lst.service_title, COUNT(*) AS services, SUM(current_price) AS total FROM
	(SELECT se.*, b.date,
		(SELECT price
			FROM prices AS p
			WHERE 1=1 AND se.id = p.service_id AND price_date <= b.date
			ORDER BY price_date DESC
			LIMIT 0, 1 
		) AS current_price
	FROM services AS se
	LEFT JOIN bookings AS b ON se.id = b.services_id
	) AS lst
$filter
GROUP BY `service_title`
ORDER BY `service_title` ASC;";

$total_prices = mysqli_query($conn, $query);

$total_patients = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `patients` AS d $filter"))[0];
$total_staffs = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `staffs` AS d $filter"))[0];
$total_users = $total_patients + $total_staffs;

$total_records = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `bookings` AS d $filter"))[0];
$total_categories = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `services_categories` AS d $filter"))[0];
$total_services = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `services` AS d $filter"))[0];

$total_filials = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `filials` AS d $filter"))[0];
$total_regions = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `regions` AS d $filter"))[0];
$total_cities = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `cities` AS d $filter"))[0];

$thisPage = renderTemplate('../../templates/site/admin/statistics.template.php', [
    'total_users' => $total_users,
    'total_staffs' => $total_staffs,
    'total_patients' => $total_patients,
    'total_records' => $total_records,
    'total_categories' => $total_categories,
    'total_services' => $total_services,
    'total_filials' => $total_filials,
    'total_regions' => $total_regions,
    'total_cities' => $total_cities,
    'total_prices' => $total_prices
]);
$thisLayout = renderTemplate('../../templates/layouts/app.template.php', [
    'brand' => $brand, 'email' => $email, 'content' => $thisPage
]);

print $thisLayout;
