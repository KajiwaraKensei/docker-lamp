<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>セッション3</title>
</head>

<body>
  <h3>セッション3</h3>
  <?php
echo 'Session ID:' . $_COOKIE['PHPSESSID'] . '<br>';
echo '名前:' . $_SESSION['name'] . '<br>';
$_SESSION['job'] = $_POST['job'];
echo '職業:' . $_POST['job'] . '<br>';
?>
  <form method="POST" action="session4.php">
    <label for="age">年齢:</label><input type="text" name="age" id="age"><br>
    <input type="submit" value="送信">
  </form>
  <hr>
  <h4>1組 9番 梶原健成</h4>
</body>

</html>