<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>ジャンル選択</title>
</head>

<body>
  <h3>ジャンル選択</h3>
  ○○組 □□□番 神戸電子
  <hr>
  お好みのジャンルを選択してください。<br>
  <form method="POST" action="product/product_select.php">
    <label><input type="radio" name="genre" value="pc">パソコン</label>&nbsp;&nbsp;
    <label><input type="radio" name="genre" value="book" checked>ブック</label>&nbsp;&nbsp;
    <label><input type="radio" name="genre" value="music">ミュージック</label>&nbsp;&nbsp;
    <input type="hidden" name="process" value="select">
    <input type="submit" value="選択">
  </form>
</body>

</html>