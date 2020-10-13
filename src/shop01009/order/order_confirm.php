<?php require_once __DIR__ . '/../util/checkLogin.php';?>
<?php

// Cartオブジェクトを生成する
require_once __DIR__ . '/../classes/cart.php';
$cart = new Cart();
// カート内の全ての商品を取り出す
$cartItems = $cart->getItems($$userId);
?>
 <?php require_once __DIR__ . '/../pre.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ショッピングサイト</title>
  <link rel="stylesheet" href="<?=$shop_css?>">
</head>
<body>
  <div>
  <?php require_once __DIR__ . '/../header.php';?>
  <p>注文をご確認ください。
    <a href="../order/order_now.php"><span class="button_image2">注文を確定する。</span></a>
  </p>
  <table>
    <caption>お届け先</caption>
    <tr><td>お名前</td><td><?=$userName?></td></tr>
    <tr><td>郵便番号</td><td><?=mb_substr($zip, 0, 3)?>-<?=mb_substr($zip, 3)?></td></tr>
    <tr><td>住所</td><td><?=$address?></td></tr>
    <tr><td>電話番号</td><td><?=$tel?></td></tr>
    <tr><td colspan="2" class="td_center">
      <a href="../user/signup.php"><span class="button_image">お届け先情報を変更する</span></a>
    </td></tr>
  </table>
  <table>
  <caption>注文内容</caption>
  <tr><th>&nbsp;</th><th>商品名</th><th>メーカー・著者<br>アーティスト</th><th>価格</th><th>注文数</th><th>金額</th></tr>
<?php
$total = 0;
foreach ($cartItems as $item) {
    $total += $item['price'] * $item['quantity'];
    ?>
    <tr><td class="td_mini_img"><img class="mini_img" src="../images/<?=$item['image']?>"></td>
    <td class="td_item_name"><?=$item['name']?></td>
    <td class="td_item_maker"><?=$item['maker']?></td>
    <td class="td_right">&yen;<?=number_format($item['price'])?></td>
    <td class="td_right"><?=$item['quantity']?></td>
    <td class="td_right">&yen;<?=number_format($item['price'] * $item['quantity'])?></td>
    <?php }?>
    <tr><th colspan="5">合計金額</th><td class="td_right">&yen;<?=number_format($total)?></td></tr>
    <tr><td colspan="6" class="td_center">
      <a href="../cart/cart_list.php"><span class="button_image">注文内容を変更する</span></a>
    </td></tr>
  </table>
  <?php require_once __DIR__ . '/../footer.php';?>
  </div>
</body>
</html>

