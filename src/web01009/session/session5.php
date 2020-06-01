<?php
session_start();
session_destroy();
setcookie('PHPSESSID', '', time() - 10, '/');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>セッション5</title>
</head>

<body>
  <h3>セッション5</h3> <?php
echo 'Session ID:' . $_COOKIE['PHPSESSID'] . '<br>';
echo '名前:' . $_SESSION['name'] . '<br>';
echo '職業:' . $_SESSION['job'] . '<br>';
echo '年齢:' . $_SESSION['age'] . '<br>';
$oldsessid = $_COOKIE['PHPSESSID'];
echo '<a href="session6.php?oldsessid=' . $oldsessid . '">次へ(全てのセッションデータを削除済み)</a>'
?>
  <hr> 1組 9番 神戸電子
</body>

</html>