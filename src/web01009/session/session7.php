<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>セッション7</title>
</head>

<body>
  <h3>セッション7</h3> <?php
echo 'Old Session ID:' . $_GET['oldsessid'] . '<br>';
echo 'New Session ID:' . $_COOKIE['PHPSESSID'] . '<br>';
?>
  <a href="session1.php">最初に戻る</a>
  <hr>
  <h4>1組 9番 梶原健成</h4>
</body>

</html>