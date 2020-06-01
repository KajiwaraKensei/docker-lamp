<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <title>checkbox.php</title>
</head>

<body>
  <h4>1組 9番 梶原健成</h4>
  <p>ラジオボタン</p>
  <?='あなたの好きな果物は、'?><?php
foreach ((filter_input(INPUT_POST, "fruits", FILTER_DEFAULT, ['flags' => FILTER_REQUIRE_ARRAY]) ?: ["不明"]) as $fruit) {
    echo $fruit . ' ';
}
?>
  <?='ですね。'?>
  <a href="checkbox.html">戻る</a>
</body>
</html>