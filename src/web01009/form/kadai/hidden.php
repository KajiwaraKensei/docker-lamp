<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>隠しフィールド</title>
</head>

<body>
  <h4>1組 9番 梶原健成</h4>
  <p>隠されていたデータは次の通りです。</p>
  <div>
      <?=filter_input(INPUT_POST, 'data')?>
  </div>
  <a href="hidden.html">戻る</a>
</body>

</html>