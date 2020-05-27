<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>プルダウンメニュー</title>
</head>

<body>
  <h4>1組 9番 梶原健成</h4>
  <div>
  <?='あなたの好きなフルーツは、' . (filter_input(INPUT_POST, 'fruit') ?: '不明') . 'ですね。'?>
  </div>
  <a href="pulldown.html">戻る</a>
</body>

</html>