<?php
// セッションを開始する
session_start();

// htmlspecialcharsの関数化
function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

function redirect($url = 'error.php')
{
    header('Location: ' . $url);
}
// 送られてきた出席番号を受け取る
$number = h(isset($_POST['number']) ? $_POST['number'] : '');
$edit_number = $number;
// データが入力されているかチェックする
if ($edit_number === '') {
    $_SESSION['message'] = "出席番号が入力されていません。";
    redirect();
    exit();
}
// データの長さが7桁かチェックする
if (strlen($edit_number) !== 7) {
    $_SESSION['message'] = "7桁の出席番号を入力してください。";
    redirect();
    exit();
}
// 先頭の2文字が「0J」かチェックする $course = 7;
if (substr($edit_number, 0, 2) !== '0J') {
    $_SESSION['message'] = "コースが正しくありません。";
    redirect();
    exit();
}
$edit_number = substr($edit_number, 2);
// クラスが「01」または「02」かチェックする $class_room = 9;
if (substr($edit_number, 0, 2) !== '01' && substr($edit_number, 0, 2) !== '02') {
    $_SESSION['message'] = "クラスが正しくありません。";
    redirect();
    exit();
}

$edit_number = substr($edit_number, 2);
// 下3桁が数字かチェックする $bango = 11;
if (!ctype_digit($edit_number)) {
    $_SESSION['message'] = "番号が数字ではありません。";
    redirect();
    exit();
}?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>number.php</title>
</head>

<body>
  <h4>1組 9番 神戸 電子</h4>
  あなたの出席番号は「 <?=$number?> 」です。<br>
  <a href="number.html">戻る</a>
</body>

</html>