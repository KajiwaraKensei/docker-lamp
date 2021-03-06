<?php
// genreの値を受け取る
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // POSTで送られてきた場合
    $genre = $_POST['genre'];
} else {
    // GETで送られてきた場合
    $genre = $_GET['genre'];
}

// Productクラスを利用する
require_once __DIR__ . '/../classes/product.php';
$product = new Product();

// 選択されたジャンルのデータを抽出
$items = $product->getItems($genre);
?>
<?php require_once __DIR__ . '/../pre.php';?>

<!DOCTYPE  html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>商品一覧</title>
<link rel="stylesheet" href="../css/shop.css">
</head>
<body>
<div>
<?php require_once __DIR__ . '/../header.php';?>

<table>
<tr><th>&nbsp;</th><th>商品名</th><th>メーカー・著者<br>アーティスト</th><th>価格</th><th>詳細</th></tr>
<?php
foreach ($items as $item) {
    ?>
    <tr>
    <td class="td_mini_img"><img class="mini_img" src="../images/<?=$item['image']?>"></td>
    <td class="td_item_name"><?=$item['name']?></td>
    <td class="td_item_maker"><?=$item['maker']?></td>
    <td class="td_right">&yen;<?=number_format($item['price'])?></td>
    <td><a href="product_detail.php?ident=<?=$item['ident']?>"><span class="button_image">詳細</span></a></td>
    </tr>
<?php
}
?>
</table>
<br>
<a href="../index.php"><span class="button_image">ジャンル選択に戻る</span></a>
<?php require_once __DIR__ . '/../footer.php';?>
</div>
</body>
</html>
