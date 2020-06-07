<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>dbinsert.php</title>
</head>

<body><div>

</div>
<?php
$dsn = 'mysql:host=mysql;dbname=php;charset=utf8';
$user = 'kobe';
$password = 'denshi';
try {
    $pdo = new PDO($dsn, $user, $password);
    $sql = 'insert into person(name, company_id, age) values(?, ?, ?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['深沢七郎', 3, 29]);
    $sql = 'select * from person';
    $stmt = $pdo->query($sql);
    $results = $stmt->fetchAll();foreach ($results as $result) {
        echo 'uid=' . $result['uid'] . ', name=' . $result['name'] . '<br>';}
} catch (Exception $e) {
    echo 'Error:' . $e->getMessage();die();
}
$pdo = null;?>  <hr>
  <h4>1組 9番 梶原健成</h4>
</body>

</html>