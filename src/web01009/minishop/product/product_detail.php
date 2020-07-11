<?php
$ident = $_GET['ident'];

require_once __DIR__ . '/../classes/product.php';
$product = new Product();
$item = $product->getItem($ident);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>詳細表示</title>
  <link rel="stylesheet" href="../css/minishop.css">
</head>

<body>
  <h3>商品詳細</h3>
  ○○組 □□□番 神戸電子
  <!-- 修正忘れずに -->
  <hr>
  <form method="POST" action="../cart/cart_add.php">
    <input type="hidden" name="ident" value="<?=$ident?>">
    <table>
      <tr>
        <th>商品名</th>
        <td><?=$item['name'];?></td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="td_center">
            <img class="detail_img" src="../images/<?=$item['image'];?>"></div>
        </td>
      </tr>
      <tr>
        <th>メーカー・著者<br>アーティスト</th>
        <td><?=$item['maker'];?></td>
      </tr>
      <tr>
        <th>価 格</th>
        <td>&yen;<?=$item['price']?></td>
      </tr>
      <tr>
        <th>注文数</th>
        <td><select name="quantity">
            <?php
for ($i = 1; $i <= 10; $i++) {
    echo '<option value="' . $i . '">' . $i . '</option>';
}
?>
        </select></td>
      </tr>
      <tr>
        <th colspan="2"><input type="submit" value="カートに入れる"></th>
      </tr>
    </table>
  </form>
  <br>
  <a href="./product_select.php">ジャンル別商品一覧に戻る</a>
</body>

</html>