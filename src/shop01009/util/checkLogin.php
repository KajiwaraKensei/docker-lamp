<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['userName'] === "ゲスト") {
    header('Location: ../user/login.php');
    exit();
}
