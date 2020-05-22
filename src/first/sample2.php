<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>サンプル2</title>
</head>

<body>
  <?= "<br>"?>
  <?php
    $fruits = ['リンゴ', 'ミカン', 'バナナ'];
    echo '配列$fruitsには次の要素が格納されている。<br>';
    foreach($fruits as $fruit){
      echo $fruit . '<br>';
    }
    $fishes = array('鯛', '鯖', '鰤');
    echo '配列$fishesには次の要素が格納されている<br>';
    foreach($fishes as $fish){
      echo $fish . '<br>';
    }
    $areas = ['神戸' => '078', '大阪' => '06', '京都' => '075'];
    foreach($areas as $key => $value){
      echo $key . '市の市外局番は' . $value . 'です。<br>';
    }
  ?>
  <hr>
  <h4>0J01009 梶原健成</h4>
</body>

</html>