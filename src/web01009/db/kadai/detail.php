<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>情報処理技術者試験(詳細)</title>
</head>

<body>
  <h1>情報処理技術者試験(詳細)</h1>
  <?php
// 共通するデータ・関数を定義したPHPファイルを読み込む
require_once __DIR__ . '/util.php';
// セッション変数$ranksの取得
$ranks = $_SESSION['ranks'];
// 選択された試験番号を取得
$ident = $_GET['ident'];
// 選択された試験番号のデータを抽出し、詳細画面を作成する
try {
    $sql = "select * from examination where ident = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$ident]);
    $result = $stmt->fetch(); // 抽出するデータは1件だけなので「fetch( )」を使用する
    echo "<table border='1'>";
    echo "<tr><th>No.</th>";
    echo "<td><a href='upDel.php?ident=" . $result['ident'] . "'>";
    echo $result['ident'] . "</a></td></tr>";
    echo "<tr><th>試験区分</th>";
    echo "<td>" . h($result['classification']) . "</td></tr>";
    echo "<tr><th>略号</th>";
    echo "<td>" . h($result['mnemonic']) . "</td></tr>";
    echo "<tr><th>英語名称</th>";
    echo "<td>" . h($result['english_name']) . "</td></tr>";
    echo "<tr><th>ランク</th>";
    echo "<td>" . $result['rank'] . "</td></tr>";
    echo "<tr><th>対象者</th>";
    echo "<td>" . h($result['target']) . "</td></tr>";
    echo "</table>";
} catch (Exception $e) {
    echo 'Error : ' . $e->getMessage();}
$pdo = null;?>
  <br>
  <a href="main.php">メイン画面に戻る</a>
  <hr>
  <h4>○○組 □□□番 神戸電子</h4>
</body>

</html>