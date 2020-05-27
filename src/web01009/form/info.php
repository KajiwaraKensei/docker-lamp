<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>info.php</title>
</head>
<body>
  <h4>1組 9番 梶原健成</h4>
  <div>
    <?=(filter_input(INPUT_POST, 'name') ?: 'ゲスト') . 'さんの年齢は' . (filter_input(INPUT_POST, 'age') ?: 'わからん') . '才です。'?>
  </div>
  <a href="info.html">戻る</a>
</body>
</html>