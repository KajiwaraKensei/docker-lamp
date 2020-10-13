<?php
if (!isset($_SESSION)) {
    session_start();
}

$http_host = '//' . $_SERVER['SERVER_NAME'];
$shopid = mb_substr($_SERVER['REQUEST_URI'], 1, 9);
$shop_login = $http_host . '/' . $shopid . '/user/login.php';

if ($_SESSION['userName'] === "ゲスト") {
    header("Location: $shop_login");
    exit();
}
$userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : '';
$userName = isset($_SESSION['userName']) ? $_SESSION['userName'] : '';
$kana = isset($_SESSION['kana']) ? $_SESSION['kana'] : '';
$zip = isset($_SESSION['zip']) ? $_SESSION['zip'] : '';
$address = isset($_SESSION['address']) ? $_SESSION['address'] : '';
$tel = isset($_SESSION['tel']) ? $_SESSION['tel'] : '';
