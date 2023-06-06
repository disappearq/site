<?php session_start();

($conn = mysqli_connect('127.0.0.1', 'root', '', 'dentistry')) or die('Error: ' . mysqli_error($conn));

$query = 'SELECT * FROM regions ORDER BY region_title';
$res = mysqli_query($conn, $query);
$regions = mysqli_fetch_all($res, MYSQLI_ASSOC);

echo json_encode($regions, JSON_UNESCAPED_UNICODE);
