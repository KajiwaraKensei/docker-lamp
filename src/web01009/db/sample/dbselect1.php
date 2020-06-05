<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>dbselect1.php</title>
</head>

<body><br>
  <?php
if (!isset($_GET['uid'])) {
    echo 'uidが指定されていません。';
} else {
    $uid = $_GET['uid'];
    $dsn = 'mysql:host=mysql;dbname=php;charset=utf8';
    $user = 'kobe';
    $password = 'denshi';
    try {
        $pdo = new PDO($dsn, $user, $password);
        $sql = 'select * from person where uid = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$uid]);
        $result = $stmt->fetch(); // データが1件だけの場合は「fetch( )」メソッドを使う
        if (empty($result['uid'])) {
            echo '指定されたuid=' . $uid . 'のデータはありません。';
        } else {
            echo '指定されたuid=' . $result['uid'] . ', name=' . $result['name'] . '<br>';
        }
    } catch (Exception $e) {
        echo 'Error:' . $e->getMessage();
        die();}
    $pdo = null;}
?>
  <hr>
  <h4>1組 9番 梶原健成</h4>
</body>

</html>