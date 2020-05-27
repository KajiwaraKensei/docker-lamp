<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>テキストエリア</title>
</head>

<body>
  <h4>1組 9番 梶原健成</h4>
  <div>入力された文章は次の通りです。</div>

  <table border="1">
    <tbody>
      <tr>
        <td><?=filter_input(INPUT_POST, 'words') ?: 'なし'?></td>
      </tr>
    </tbody>
  </table>
  <a href="textarea.html">戻る</a>
</body>

</html>