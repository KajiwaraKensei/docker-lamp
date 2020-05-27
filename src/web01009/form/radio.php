<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>radio.php</title>
</head>

<body>
  <h4>1組 9番 梶原健成</h4>
  <p>ラジオボタン</p>
  <?='あなたの好きな果物は、' . (filter_input(INPUT_POST, 'fruit') ?: '不明') . 'ですね。'?>
  <a href="radio.html">戻る</a>
</body>

</html>