<?php require_once __DIR__ . '/pre.php';?>
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
  <?php
require_once __DIR__ . '/header.php';
$pc_num = mt_rand(1, 5);
$book_num = mt_rand(1, 5);
$music_num = mt_rand(1, 5);
?>

  <p>お好みのジャンルを選択してください。</p>
  <div class="topnavi">

  <?php
$menus = [
    array("genre" => "pc", "img" => $pc_num),
    array("genre" => "book", "img" => $book_num),
    array("genre" => "music", "img" => $music_num),
];
foreach ($menus as $item) {
    ?>
    <div class="topbox">
      <p class="topvalue"><?=strtoupper($item["genre"])?></p><hr>
      <a href="product/product_select.php?genre=<?=$item["genre"]?>">
        <img class="topimage" src="images/<?=$item["genre"]?>00<?=$item["img"]?>.jpg">
      </a>
    </div>
<?php
}
?>
  </div> <br><br>
  <?php require_once __DIR__ . '/footer.php';?>
  </div>
</body>
</html>

