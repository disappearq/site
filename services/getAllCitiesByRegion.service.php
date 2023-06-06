<?php session_start();

($conn = mysqli_connect('127.0.0.1', 'root', '', 'dentistry')) or die('Error: ' . mysqli_error($conn));

$query = 'SELECT * FROM cities WHERE region_id = ' . $_GET['region_id'] . ' ORDER BY city_title';
$res = mysqli_query($conn, $query);
$cities = mysqli_fetch_all($res, MYSQLI_ASSOC);

echo json_encode($cities, JSON_UNESCAPED_UNICODE);
