<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>obj_select1.php</title>
</head>

<body>
  <div>
  <?php if (!isset($_GET['uid'])) {
    echo 'uidが指定されていません。';
} else {
    $uid = $_GET['uid'];
    require_once __DIR__ . '/classes/dbphp.php';
    $dbPhp = new DbPhp();
    $person = $dbPhp->selectPerson($uid);
    if (empty($person['uid'])) {
        echo '指定されたuid=' . $uid . 'のデータはありません。';
    } else {
        echo '指定されたuid=' .
            $person['uid'] .
            ', name=' .
            $person['name'] .
            '<br>';
    }
}?>
  <hr>
  <h4>1組 9番 梶原健成</h4>
  </div>
</body>

</html>