<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>円周と面積</title>
</head>

<body>
  <?php $radius = filter_input(INPUT_POST, 'radius') ?: 'null'?>
  <h4>1組 9番 梶原健成</h4>
  <table border="1">
    <tbody>
      <tr>
        <th>半径</th>
        <td><?=$radius?></td>
      </tr>
      <tr>
        <th>円周</th>
        <td><?=$radius !== 'null' ? 2 * $radius * M_PI : $radius?></td>
      </tr>
      <tr>
        <th>面積</th>
        <td><?=$radius !== 'null' ? M_PI * $radius ** 2 : $radius?></td>
      </tr>
    </tbody>
  </table>
  <a href="circle.html">戻る</a>
</body>

</html>