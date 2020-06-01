<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>セッション4</title>
</head>

<body>
  <h3>セッション4</h3> <?php
echo 'Session ID:' . $_COOKIE['PHPSESSID'] . '<br>';
echo '名前:' . $_SESSION['name'] . '<br>';
echo '職業:' . $_SESSION['job'] . '<br>';
unset($_SESSION['job']);
$_SESSION['age'] = $_POST['age'];
echo '年齢:' . $_POST['age'] . '<br>';
?>
  <a href='session5.php'>次へ(職業のセッションデータ削除済み)</a>
  <hr>
  1組 9番 神戸電子
</body>

</html>