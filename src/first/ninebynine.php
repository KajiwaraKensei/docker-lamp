<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>九九表</title>
  <style>
  td {
    width: 30px;
    text-align: right;
  }
  </style>
</head>

<body>
  <h4>0j01009 梶原健成</h4>
  <hr>
  <br>
  <table border="1">
    <?php for ($i=1; $i <= 9; $i++){ ?>
    <tr>
      <?php for ($j=1; $j <= 9; $j++){ ?>
      <td><?=$i * $j?></td>
      <?php } ?>
    </tr>
    <?php } ?>
  </table>


</body>

</html>