<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>リストボックス</title>
</head>

<body>
  <h4>1組 9番 梶原健成</h4>
  <div>
  <?='あなたの好きなフルーツは、'?><?php
foreach ((filter_input(INPUT_POST, "fruits", FILTER_DEFAULT, ['flags' => FILTER_REQUIRE_ARRAY]) ?: ["不明"]) as $fruit) {
    echo $fruit . ' ';
}
?>
 <?='ですね。'?>
  </div>
  <a href="listbox.html">戻る</a>
</body>

</html>