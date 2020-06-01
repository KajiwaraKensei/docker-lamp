<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Cookie2</title>
</head>

<body>
  <h3>Cookie2</h3>
  <?php
if (isset($_POST['user_name']) && $_POST['user_name'] != '') {
    setcookie("cookie_name", $_POST['user_name'], time() + 10);
    $user_name = $_POST['user_name'];
    echo '<a href="cookie3.php">クッキーデータを確認する</a>';
} else {
    echo '名前が入力されていません。 ';
    echo '<a href="cookie1.php">cookie1.phpに戻る</a>';}?>
  <hr> 1組 9番 神戸電子
</body>

</html>