<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Cookie3</title>
</head>

<body>
  <h3>Cookie3</h3> <?php
if (isset($_COOKIE['cookie_name'])) {
    echo 'Cookieに保存されている名前は「' . $_COOKIE['cookie_name'] . '」ですが、ここで破棄します。<br>';
    setcookie("cookie_name", '', time() - 10);
    echo '<a href="cookie4.php">破棄後のクッキーデータを確認する</a>';} else {
    echo 'Cookieデータが保存されていません。 ';
    echo '<a href="cookie1.php">cookie1.phpに戻る</a>';}
?>
  <hr> 1組 9番 神戸電子
</body>

</html>