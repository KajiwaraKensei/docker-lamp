<?php
// genreの値を受け取る
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $genre = $_POST['genre'];
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $genre = $_COOKIE['genre'];
}
require_once __DIR__ . '/../classes/product.php';
$product = new Product();
$items = $product->getItems($genre);
setcookie('genre', $genre, time() + 60 * 60 * 24 * 7);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>商品一覧</title>
  <link rel="stylesheet" href="../css/minishop.css">
</head>

<body>
  <div>
    <h3>ジャンル別商品一覧</h3>
    ○組 □番 神戸電子<br>
    <hr>
    <table>
      <tr>
        <th>&nbsp;</th>
        <th>商品名</th>
        <th>メーカー・著者<br>アーティスト</th>
        <th>価格</th>
        <th>詳細</th>
      </tr>

      <?php
foreach ($items as $item) {
    echo '<tr>' .
    '<td class="td_mini_img"><img class="mini_img" src="../images/' . $item['image'] . '"></td>' .
    '<td class="td_item_name">' . $item['name'] . '</td>' .
    '<td class="td_item_maker">' . $item['maker'] . '</td>' .
    '<td class="td_right">&yen;' . number_format($item['price']) . '</td>' .
        '<td><a href="product_detail.php?ident=' . $item['ident'] . '">詳細</a></td>' .
        '</tr>';
}
?>
    </table>
    <br>
    <a href="../index.php">ジャンル選択に戻る</a>
  </div>

</body>

</html>