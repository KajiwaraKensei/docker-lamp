<?php
require_once __DIR__ . '/../pre.php';
require_once __DIR__ . '/../header.php';
$_SESSION = [];
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}
setcookie("userId", "", time() - 30, '/');
setcookie("userName", "", time() - 30, '/');
header("Location: " . $index_php);
