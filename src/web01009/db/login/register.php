<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-type" charset="utf-8">
  <title>ユーザー登録</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div id="main">
    <?php
require_once __DIR__ . '/util.php';
$ident = filter_input(INPUT_POST, 'input_id');
$pass = filter_input(INPUT_POST, 'input_pass');
$name = filter_input(INPUT_POST, 'input_name');
$error_code = 0;

if (empty($ident) || empty($pass) || empty($name)) {
    $error_code = 100;
} else {
    try {
        $sql = "select * from password where ident = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$ident]);
        $result = $stmt->fetch();
        if (empty($result['ident'])) {
            $sql = "insert into password ( ident, pass, name ) values ( ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$ident, $pass, $name]);
        } else {
            $error_code = 200;
        }
    } catch (Exception $e) {
        $error_code = 900;
    }
    $pdo = null;
}
if ($error_code == 0) {
    echo "<h2>ユーザー登録が完了しました。</h2>";
    echo "<hr><br>";
    echo "<table id='regiTable'>";
    echo "<tr><th>ユーザーID</th><td>" . h($ident) . "</td></tr>";
    echo "<tr><th>パスワード</th><td>" . h($pass) . "</td></tr>";
    echo "<tr><th>お名前</th><td>" . h($name) . "</td></tr>";
    echo "</table><br>";
    echo "<a href='login.html'>ログインページへ</a>";
} else if ($error_code == 100) {
    echo "<h2>未入力項目があります。</h2>";
    echo "<hr><br>";
    echo "ユーザーID、パスワード、お名前のすべての項目を入力してください。<br><br>";
    echo "<a href='register.html'>新規ユーザー登録へ戻る</a>";
} else if ($error_code == 200) {
    echo "<h2>ユーザーIDは登録済みです。</h2>";
    echo "<hr><br>";
    echo "入力されたユーザーID(<b>" . $ident . "</b>)は、すでに登録済みです。<br>";
    echo "他のユーザーIDをご利用ください。<br /><br>";
    echo "<a href='register.html'>新規ユーザー登録へ戻る</a>";
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