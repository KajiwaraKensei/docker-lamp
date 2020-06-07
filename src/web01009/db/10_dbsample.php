<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>dbsample.php</title>
</head>

<body>
  <div>
  <?php
// $dsn = 'mysql:host=localhost;dbname=php;charset=utf8';
$dsn = 'mysql:host=mysql;dbname=php;charset=utf8';
$user = 'kobe';
$password = 'denshi';

try {
    $pdo = new PDO($dsn, $user, $password);
    $sql = 'select * from company';
    $stmt = $pdo->query($sql);
    $results = $stmt->fetchAll();

    foreach ($results as $result) {
        echo 'cid：' . $result['cid'] . ', 会社名：' . $result['name'] . ', 住所：' . $result['address'] . '<br>';
    }
} catch (Exception $e) {
    echo 'Error:' . $e->getMessage();
    die();
}
$pdo = null;
?>  </div>

  <hr>
  <h4>○○組　□□□番　神戸電子</h4>
</body>

</html>