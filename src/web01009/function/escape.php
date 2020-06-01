<?php
function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>escape.php</title>
</head>

<body>
  <h4>1組 9番 神戸 電子</h4>
  送られてきた氏名は「<?=h(filter_input(INPUT_POST, 'name'))?>」です。<br> <a href="escape.html">戻る</a>
</body>

</html>