<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sample</title>
</head>

<body>
  <!-- これはHTMLのコメントです -->
  <h4>0J01009 梶原健成</h4>
  <?php
  //PHPのScriptないで１行のないで１行のコメントを書く時に使います。
  /*
   C言語やJavaと同じように、
   スクリプト内で複数行のコメントを書く時に使います。
  */

  $first_name = "梶原";   // 変数の宣言では「型」は必要ありません
  $last_name = "健成";
  // 文字列の連結は「.(ドット)」を使う
  echo '<p>' . $last_name . $first_name . 'です。</p>'; 
  $num = 10;
  echo 'シングルクォーテーションでは、変数の値 $num は表示されません<br>。';
  echo ”ダブルクォーテーションでは、変数の値 .$num. は表示されます。”;
  ?>
</body>

</html>