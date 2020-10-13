<?php
// 送られてきたデータを受けとる
$kubun = $_POST['kubun'];
$userId = $_POST['userId'];
$userName = $_POST["userName"];
$kana = $_POST['kana'];
$zip = $_POST['zip'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$password = $_POST['password'];

session_start();
// バリデーションはメールアドレスと郵便番号のみとする
// メールアドレスのバリデーションはfilter̲var() を使い、RFCに準拠しないメルアドはエラーとする
if (!filter_var($userId, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['signup_error'] = '正しいメールアドレスを入力してください。';
    header('Location: signup.php');
    exit();
}

// 郵便番号は半角整数の7桁かどうかだけチェックする
if (!is_numeric($zip) || strlen($zip) !== 7) {
    $_SESSION['signup_error'] = '正しい郵便番号を入力してください。';
    header('Location: signup.php');
    exit();
}

// Userオブジェクトを生成し、 ユーザー登録処理を行うsignUp( )メソッドを呼び出し、その結果のメッセージを受け取る
require_once __DIR__ . '/../classes/user.php';
$user = new User();
if ($kubun === "insert") {
    $result = $user->signUp($userId, $userName, $kana, $zip, $address, $tel, $password, $_SESSION['userId']);
} else {
    $result = $user->updateUser($userId, $userName, $kana, $zip, $address, $tel, $password, $_SESSION['userId']);
}

if ($result !== '') {
    $_SESSION['signup_error'] = $result;
    header('Location: signup.php');
    exit();
}

$_SESSION['userId'] = $userId;
$_SESSION['userName'] = $userName;
$_SESSION['kana'] = $kana;
$_SESSION['zip'] = $zip;
$_SESSION['address'] = $address;
$_SESSION['tel'] = $tel;

setcookie("userId", $userId, time() + 60 * 60 * 24 * 14, '/');
setcookie("userName", $userName, time() + 60 * 60 * 24 * 14, '/');
?>

<?php require_once __DIR__ . '/../util.php';?>
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
  ユーザー情報を登録・更新しました。<br>
 <table>
  <tr><td>Eメール</td><td><?=h($userId)?></td></tr>
  <tr><td>名前</td><td><?=h($userName)?></td></tr>
  <tr><td>フリガナ</td><td><?=h($kana)?></td></tr>
  <tr><td>郵便番号</td><td><?=mb_substr($zip, 0, 3)?>-<?=mb_substr($zip, 3)?></td></tr>
  <tr><td>住所</td><td><?=h($address)?></td></tr>
  <tr><td>電話番号</td><td><?=h($tel)?></td></tr>
 </table>
  <?php require_once __DIR__ . '/../footer.php';?>
  </div>
</body>
</html>

