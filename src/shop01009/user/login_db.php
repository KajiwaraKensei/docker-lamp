<?php
// 送られてきたユーザーIDとパスワードを受け取る
$userId = $_POST["userId"];
$password = $_POST["password"];

require_once __DIR__ . '/../classes/user.php';
$user = new User();
$result = $user->authUser($userId, $password);

session_start();
if (empty($result['userId'])) {
    $_SESSION['login_error'] = 'ユーザーID、パスワードを確認してください。';
    echo $login_php;
    header('Location: login.php');
    exit();
}

$userName = $result['userName'];
$user->changeCartUserId($_SESSION['userId'], $userId);

$_SESSION['userId'] = $userId;
$_SESSION['userName'] = $userName;
$_SESSION['kana'] = $result['kana'];
$_SESSION['zip'] = $result['zip'];
$_SESSION['address'] = $result['address'];
$_SESSION['tel'] = $result['tel'];

setcookie("userId", $userId, time() + 60 * 60 * 24 * 14, '/');
setcookie("userName", $userName, time() + 60 * 60 * 24 * 14, '/');
?>

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
    <p>こんにちは、<?=$userName?>さん。</p>
    <p>ショッピングをお楽しみください。</p>
    <?php require_once __DIR__ . '/../footer.php';?>
  </div>
</body>
</html>
