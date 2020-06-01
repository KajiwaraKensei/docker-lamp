<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>セッション1</title>
</head>

<body>
  <h3>セッション1</h3>
  <form method="POST" action="session2.php">
    <label for="u_name">名前:</label><input type="text" name="user_name" id="u_name"><br>
    <input type="submit" value="送信">
  </form>
  <hr>
  1組 9番 神戸電子
</body>

</html>