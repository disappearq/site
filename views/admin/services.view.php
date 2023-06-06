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

// Пагинатор (разбиение данных на страницы)
$default_limit = 8; // Какой лимит если не указан в полях на странице
$limit_num = !empty($_GET['limit']) && $_GET['limit'] >= 1 ? $_GET['limit'] : $default_limit; // Проверка указан-ли лимит на странице
$total = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM `services` AS se $filter"))[0]; // Всего записей
$pages = ceil($total / $limit_num); // Всего страниц
$page = !empty($_GET['page']) ? $_GET['page'] : 1; // Указана-ли страница в параметрах
$page = is_numeric($page) && $page >= 1 ? min([$page, $pages]) : 1;  // Проверка на верность страницы и выхода за границы
$_GET['page'] = $page; // Перезапись параметра
$kolvo = $limit_num * ($total == 0 ? 1 : $page - 1); // Запись с которой взять из базы данных (начало таблицы)
$limit = "LIMIT $kolvo, $limit_num"; // Подготовка строки лимита для запроса

$query =
    "SELECT se.*, sc.category_title,
(SELECT price
    FROM prices AS p
    WHERE se.id = p.service_id
    ORDER BY price_date DESC
    LIMIT 0, 1 
) AS current_price,
(SELECT price_date
    FROM prices AS p
    WHERE se.id = p.service_id
    ORDER BY price_date DESC
    LIMIT 0, 1 
) AS current_price_date
FROM services AS se
LEFT JOIN services_categories AS sc ON se.category_id = sc.id
$filter
ORDER BY `service_title` ASC $limit";
$services_result = mysqli_query($conn, $query);


$thisPage = renderTemplate('../../templates/site/admin/services.template.php', ['total' => $total, 'result' => $services_result, 'categories' => $services_categories, 'page' => $page, 'pages' => $pages]);
$thisLayout = renderTemplate('../../templates/layouts/app.template.php', ['brand' => $brand, 'email' => $email, 'content' => $thisPage, 'services_categories' => $services_categories]);

print $thisLayout;
