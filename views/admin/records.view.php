<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/renderTemplate.php';

($conn = mysqli_connect('127.0.0.1', 'root', '', 'dentistry')) or die('Error: ' . mysqli_error($conn));

$query = "SELECT * FROM filials AS f WHERE f.id = " . $_SESSION['STAFF']['filial_id'];
$filial_data = mysqli_fetch_assoc(mysqli_query($conn, $query));

$query =
    "SELECT * FROM services AS se";
$services_result = mysqli_query($conn, $query);

$filter = 'WHERE 1=1 and b.filial_id = ' . $_SESSION['STAFF']['filial_id'];
if (!empty($_GET['surname_filter'])) $filter .= " and b.patient_surname like '%$_GET[surname_filter]%'";
if (!empty($_GET['name_filter'])) $filter .= " and b.patient_name like '%$_GET[name_filter]%'";
if (!empty($_GET['patronymic_filter'])) $filter .= " and b.patient_patronymic like '%$_GET[patronymic_filter]%'";
if (!empty($_GET['phone_filter'])) $filter .= " and b.phone = '$_GET[phone_filter]'";
if (!empty($_GET['service_filter'])) $filter .= " and b.services_id = '$_GET[service_filter]'";
if (!empty($_GET['date_filter'])) $filter .= " and b.date = '$_GET[date_filter]'";

// Пагинатор (разбиение данных на страницы)
$default_limit = 10; // Какой лимит если не указан в полях на странице
$limit_num = !empty($_GET['limit']) && $_GET['limit'] >= 1 ? $_GET['limit'] : $default_limit; // Проверка указан-ли лимит на странице
$total = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `bookings` AS b $filter"))[0]; // Всего записей
$pages = ceil($total / $limit_num); // Всего страниц
$page = !empty($_GET['page']) ? $_GET['page'] : 1; // Указана-ли страница в параметрах
$page = is_numeric($page) && $page >= 1 ? min([$page, $pages]) : 1;  // Проверка на верность страницы и выхода за границы
$_GET['page'] = $page; // Перезапись параметра
$kolvo = $limit_num * ($total == 0 ? 1 : $page - 1); // Запись с которой взять из базы данных (начало таблицы)
$limit = "LIMIT $kolvo, $limit_num"; // Подготовка строки лимита для запроса

$query =
    "SELECT b.*, st.staff_name, st.staff_surname, st.staff_patronymic, se.service_title  FROM `bookings` AS b
LEFT JOIN `staffs` AS st ON b.staff_id = st.id
LEFT JOIN `services` AS se ON b.services_id = se.id
$filter
ORDER BY `date` ASC, `time` ASC $limit";
$result = mysqli_query($conn, $query);

$thisPage = renderTemplate('../../templates/site/admin/records.template.php', [
    'total' => $total, 'pages' => $pages,
    'page' => $page, 'result' => $result, 'services_result' => $services_result
]);
$thisLayout = renderTemplate('../../templates/layouts/app.template.php', ['brand' => $brand, 'email' => $email, 'content' => $thisPage]);

print $thisLayout;
