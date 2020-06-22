<?php
$dsn = 'mysql:host=localhost;dbname=login;charset=utf8';
getenv('DB_HOST') && $dsn = 'mysql:host=' . getenv('DB_HOST') . ';dbname=login;charset=utf8';

$user = 'denshi';
$password = 'kobe';
$pdo = new PDO($dsn, $user, $password);
function h($data)
{
    return htmlspecialchars($data, ENT_QUOTES, "UTF-8");
}