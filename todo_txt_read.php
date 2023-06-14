<?php
// データまとめ用の空文字変数
$str = '';
$array = [];

// ファイルを開く（読み取り専用）
$file = fopen('data/todo.txt', 'r');
// $file = fopen('data/todo.txt','r');
// ファイルをロック
flock($file, LOCK_EX);

// fgets()で1行ずつ取得→$lineに格納
if ($file) {
  while ($line = fgets($file)) {
     $str .="<tr><td>{$line}</td></tr>";
     array_push($array,$line);
   }
 }

// ロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// `$str`に全てのデータ（タグに入った状態）がまとまるので，HTML内の任意の場所に表示する．

// var_dump($array);
// exit();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投資信託取扱商品資産ポートフォリオ（入力画面）</title>
  
</head>

<body>
  <fieldset>
    <legend>投資信託取扱商品資産ポートフォリオ（入力画面）</legend>
    <a href="todo_txt_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th</th>
        </tr>
      </thead>
      <tbody>
        <?=$str?>
      </tbody>
    </table>
  </fieldset>
  <script>
    const array = <?= json_encode($array)?>;
    var labels = Object.values(array);
    
    console.log(array);
    
    
              
  </script>
</body>

</html>