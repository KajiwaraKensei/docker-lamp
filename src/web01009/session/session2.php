<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>セッション2</title>
</head>

<body>
  <h3>セッション2</h3>
  <?php
echo 'Session ID:' . $_COOKIE['PHPSESSID'] . '<br>';
$_SESSION['name'] = $_POST['user_name'];
echo '名前:' . $_POST['user_name'] . '<br>';
?>
  <form method="POST" action="session3.php">
    <label for="job">職業:</label><input type="text" name="job" id="job"><br>
    <input type="submit" value="送信">
  </form>
  <hr>
  1組 9番 神戸電子
</body>

</html>