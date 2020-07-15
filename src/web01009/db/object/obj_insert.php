<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>obj_insert.php</title>
</head>

<body>
  <div>
  <?php
require_once __DIR__ . '/classes/dbphp.php';
$dbPhp = new DbPhp();

$dbPhp->insertPerson('深沢七郎', 3, 29);

$persons = $dbPhp->selectAll();
foreach ($persons as $person) {
    echo 'uid=' . $person['uid'] . ', name=' . $person['name'] . '<br>';
}
?>
  <hr>
  <h4>1組 9番 梶原健成</h4>
  </div>
</body>

</html>