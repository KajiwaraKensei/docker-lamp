<?php
// セッションを開始する
session_start();
// セッション変数を全て破棄する

session_destroy();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>error.php</title>
</head>

<body>
  <h4>1組 9番 梶原健成</h4>
  <?php
// エラーメッセージを表示する
echo "エラー内容:" . $_SESSION['message'] . "<br>";
3;
?>
  <a href="number.html">再入力する</a>
</body>

</html>