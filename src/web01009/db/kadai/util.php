<?php
// データベース接続用パラメータ
$dsn = 'mysql:host=localhost;dbname=itee;charset=utf8';
getenv('DB_HOST') && $dsn = 'mysql:host=' . getenv('DB_HOST') . ';dbname=itee;charset=utf8';

$user = 'ipa';
$password = 'jitec';
$pdo = new PDO($dsn, $user, $password);
// ranksテーブルのデータを連想配列に格納し、セッションデータとして登録する
session_start();
// まだセッションデータとして登録されていない場合は処理を行う
if (!isset($_SESSION['ranks'])) {
// レベルは1からのため、インデックス0には空文字をセットしておく
    $ranks[0] = "";
    try {
        $sql = "select * from ranks";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        foreach ($results as $result) {
// 連想配列$ranksにlevelをキー、gradeを値で保存
            $ranks[$result['level']] = $result['grade'];}
// セッションデータとして登録する
        $̲SESSION['ranks'] = $ranks;} catch (Exception $e) {
        echo 'Error : ' . $e->getMessage();}
}
// エスケープ処理用関数
function h($data)
{
    return htmlspecialchars($data, ENT_QUOTES, "UTF-8");
}