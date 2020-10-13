<?php require_once __DIR__ . '/../pre.php';?>
<?php require_once __DIR__ . '/../util.php';
$userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : '';
$userName = isset($_SESSION['userName']) ? $_SESSION['userName'] : '';
$kana = isset($_SESSION['kana']) ? $_SESSION['kana'] : '';
$zip = isset($_SESSION['zip']) ? $_SESSION['zip'] : '';
$address = isset($_SESSION['address']) ? $_SESSION['address'] : '';
$tel = isset($_SESSION['tel']) ? $_SESSION['tel'] : '';
if ($userName === "ゲスト") { // ゲストがこの画面にアクセスした場合
    $kubun = "insert";
    $title = "ユーザー情報を登録してください。";
    $userId = '';
    $userName = '';
} else {
    $kubun = "update";
    $title = "ユーザー情報を確認・変更することができます。";
}
?>
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
  <p><?=$title?></p>
  <form method="POST" action="./signup_db.php">
    <table>
      <tr><td>Eメール</td><td><input type="text" name="userId" value="<?=$userId?>" required></td></tr>
      <tr><td>名前</td><td><input type="text" name="userName" value="<?=$userName?>" required></td></tr>
      <tr><td>フリガナ</td><td><input type="text" name="kana" value="<?=$kana?>" required></td></tr>
      <tr><td>郵便番号</td><td><input type="text" name="zip" value="<?=$zip?>" required></td></tr>
      <tr><td>住所</td><td><input type="text" name="address" value="<?=$address?>" required></td></tr>
      <tr><td>電話番号</td><td><input type="text" name="tel" value="<?=$tel?>" required></td></tr>
      <tr><td>パスワード</td><td><input type="password" name="password" required></td></tr>
      <tr><td colspan="2"><input type="submit" value="送信"></td></tr>
    </table>
    <input type="hidden" value="<?=$kubun?>" name="kubun">
  </form>
  <?php require_once __DIR__ . '/../footer.php';?>
  </div>
</body>
</html>

