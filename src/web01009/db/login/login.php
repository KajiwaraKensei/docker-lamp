<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>ようこそ</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div id="main">
    <?php
require_once __DIR__ . '/util.php';
$ident = filter_input(INPUT_POST, 'login_id');
$pass = filter_input(INPUT_POST, 'login_pass');
$name = "";
$error_code = 0;
if (empty($ident) || empty($pass)) {
    $error_code = 100;
} else {
    try {
        $sql = "select * from password where ident = ? and pass = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$ident, $pass]);
        $result = $stmt->fetch();
        if (empty($result['ident'])) {
            $error_code = 200;
        } else {
            $name = $result['name'];
        }
    } catch (Exception $e) {
        $error_code = 900;
        $pdo = null;
    }
}
if ($error_code == 0) {
    echo "<h2>ようこそ!</h2>";
    echo "<hr><br>";
    echo "こんにちは、" . h($name) . "さん!<br><br>";
    echo "<a href='login.html'>ログインページへ</a>";
} else if ($error_code == 100) {
    echo "<h2>未入力項目があります。</h2>";
    echo "<hr><br>";
    echo "ユーザーID、パスワードを入力してください。<br><br>";
    echo "<a href='login.html'>ログインページへ</a>";
} else if ($error_code == 200) {
    echo "<h2>ユーザーID、パスワードが違います。</h2>";
    echo "<hr><br>";
    echo "ユーザーID、パスワードを確認してください。<br>";
    echo "<a href='login.html'>ログインページへ</a>";
} else if ($error_code == 900) {
    echo "<h2>データベースエラー</h2>";
    echo "<hr><br>";
    echo "データベースでエラーが発生しました。<br>";
    echo "管理者に連絡してください。<br><br>";
    echo "<a href='login.html'>ログインページへ</a>";
}
?>
    <br><br>
    <hr>
    <p>1組 9番 梶原健成</p>
  </div>
</body>

</html>