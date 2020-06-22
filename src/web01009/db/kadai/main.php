<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>情報処理技術者試験</title>
</head>

<body>
  <h1>情報処理技術者試験</h1>
  <table border="1">
    <tr>
      <th>No.</th>
      <th>試験区分</th>
      <th>略号</th>
    </tr>
    <?php
// 共通するデータ・関数を定義したPHPファイルを読み込む
require_once __DIR__ . '/util.php';
//「DIR」の前後にはアンダースコアが2個ずつあり!!
// テーブルexaminationの全データを抽出し、一覧画面を作成する
try {
    $sql = "select * from examination";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    foreach ($results as $result) {
        echo "<tr><td><a href='detail.php?ident=" . $result['ident'] . "'>" . $result['ident'] . "</a></td>";
        echo "<td>" . h($result['classification']) . "</td>";
        echo "<td>" . h($result['mnemonic']) . "</td></tr>";
    }
} catch (Exception $e) {
    echo 'Error:' . $e->getMessage();
}
$pdo = null;
?>
  </table>
  <br>
  <a href="insert.php">新規登録</a>
  <hr>
  <h4>○○組 □□□番 神戸電子</h4>
</body>

</html>