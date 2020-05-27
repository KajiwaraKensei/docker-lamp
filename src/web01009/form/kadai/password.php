<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>パスワード</title>
</head>

<body>
  <h4>1組 9番 梶原健成</h4>
  <div>
    <div>
      <?='入力されたユーザーIDは、' . (filter_input(INPUT_POST, 'uid') ?: 'ない') . 'です。'?>
    </div>
    <div>
      <?='入力されたパスワードは、' . (filter_input(INPUT_POST, 'password') ?: 'ない') . 'です。'?>
    </div>
  </div>
  <a href="password.html">戻る</a>
</body>

</html>