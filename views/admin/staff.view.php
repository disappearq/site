<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/renderTemplate.php';

($conn = mysqli_connect('127.0.0.1', 'root', '', 'dentistry')) or die('Error: ' . mysqli_error($conn));

$query = "SELECT * FROM filials AS f WHERE f.id = " . $_SESSION['STAFF']['filial_id'];
$filial_data = mysqli_fetch_assoc(mysqli_query($conn, $query));


// Подготовка строки фильтра для запроса
$filter = 'WHERE 1=1 and st.filial_id = ' . $_SESSION['STAFF']['filial_id'];

// Пагинатор (разбиение данных на страницы)
$default_limit = 10; // Какой лимит если не указан в полях на странице
$limit_num = !empty($_GET['limit']) && $_GET['limit'] >= 1 ? $_GET['limit'] : $default_limit; // Проверка указан-ли лимит на странице
$total = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `staffs` AS st $filter"))[0]; // Всего записей
$pages = ceil($total / $limit_num); // Всего страниц
$page = !empty($_GET['page']) ? $_GET['page'] : 1; // Указана-ли страница в параметрах
$page = is_numeric($page) && $page >= 1 ? min([$page, $pages]) : 1;  // Проверка на верность страницы и выхода за границы
$_GET['page'] = $page; // Перезапись параметра
$kolvo = $limit_num * ($total == 0 ? 1 : $page - 1); // Запись с которой взять из базы данных (начало таблицы)
$limit = "LIMIT $kolvo, $limit_num"; // Подготовка строки лимита для запроса

$query =
    "SELECT st.*, j.job_name FROM `staffs` AS st
LEFT JOIN jobs AS j ON st.job_id = j.id
$filter
ORDER BY `staff_surname` ASC, `staff_name` ASC $limit";
$staffs_res = mysqli_query($conn, $query);

$thisPage = renderTemplate('../../templates/site/admin/staff.template.php', ['total' => $total, 'result' => $staffs_res, 'page' => $page, 'pages' => $pages]);
$thisLayout = renderTemplate('../../templates/layouts/app.template.php', ['brand' => $brand, 'email' => $email, 'content' => $thisPage]);

print $thisLayout;
