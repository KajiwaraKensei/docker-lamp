<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>セッション6</title>
</head>

<body>
  <h3>セッション6</h3> <?php
echo 'Session ID:' . $_COOKIE['PHPSESSID'] . '<br>';
echo '名前:' . $_SESSION['name'] . '<br>';
echo '職業:' . $_SESSION['job'] . '<br>';
echo '年齢:' . $_SESSION['age'] . '<br>';
$oldsessid = $_GET['oldsessid'];
echo '<a href="session7.php?oldsessid=' . $oldsessid . '">新しいセッション開始</a>';
?>
  <hr> 1組 9番 神戸電子
</body>

</html>