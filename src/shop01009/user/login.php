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
if (isset($_SESSION["login_error"])) {
    echo '<p class="error_class">' . $_SESSION['login_error'] . '</p>';
    unset($_SESSION["login_error"]);
} else {
    echo '<p>利用するにあたってはログインしてください。</p>';
}
?>

    <form method="POST" action="./login_db.php">
    <table>
      <tr>
        <td>Eメール</td>
        <td><input type="text" name="userId" required></td>
      </tr>
      <tr>
        <td>パスワード</td>
        <td><input type="password" name="password" required></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="ログイン"></td>
      </tr>
    </table>
    </form> <a href="./signup.php"><span class="button_image">新規登録はこちらから</span></a>
    <?php require_once __DIR__ . '/../footer.php';?>

  </div>
</body>
</html>