<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>複数のGETメソッドのデータ</title>
</head>

<body>
  <h4>1組　9番 梶原 健成</h4>
  Getメソッドで送られてきた複数のデータを受け取る。<br>
  <?= "出席番号:" . $_GET['course']. $_GET['class']. $_GET['number'] . "、氏名:" . $_GET['name'] ?>
</body>

</html>