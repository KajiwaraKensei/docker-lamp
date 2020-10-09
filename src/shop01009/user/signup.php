<?php require_once __DIR__ . '/../pre.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ショッピングサイト</title>
  <link rel="stylesheet" href="<?=$shop_css?>">
</head>
<body>
  <div>
  <?php require_once __DIR__ . '/../header.php';?>
  <?php
if (isset($_SESSION['signup_error'])) {
    echo '<p class="error_class">' . $_SESSION['signup_error'] . '</p>';
    unset($_SESSION['signup_error']);
}
?>
  <p>ユーザー情報を登録してください。</p>
  <form method="POST" action="./signup_db.php">
    <table>
      <tr><td>Eメール</td><td><input type="text" name="userId" required></td></tr>
      <tr><td>名前</td><td><input type="text" name="userName" required></td></tr>
      <tr><td>フリガナ</td><td><input type="text" name="kana" required></td></tr>
      <tr><td>郵便番号</td><td><input type="text" name="zip" required></td></tr>
      <tr><td>住所</td><td><input type="text" name="address" required></td></tr>
      <tr><td>電話番号</td><td><input type="text" name="tel" required></td></tr>
      <tr><td>パスワード</td><td><input type="password" name="password" required></td></tr>
      <tr><td colspan="2"><input type="submit" value="送信"></td></tr>
    </table>
  </form>
  <?php require_once __DIR__ . '/../footer.php';?>
  </div>
</body>
</html>

