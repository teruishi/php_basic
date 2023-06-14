<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投資信託取扱商品資産ポートフォリオ（入力画面）</title>
</head>

<body>
  <form action="todo_txt_create.php" method="POST">
    <fieldset>
      <legend>投資信託取扱商品資産ポートフォリオ（入力画面）</legend>
      <a href="todo_txt_read.php">一覧画面</a>
      <div>
        アセットクラス：<select name="asset_class">
          <option value="国内株式" name="asset_class">国内株式</option>
          <option value="国内債券" name="asset_class">国内債券</option>
          <option value="海外株式" name="asset_class">海外株式</option>
          <option value="海外債券"name="asset_class">海外債券</option>
          <option value="商品"name="asset_class">商品</option>
          <option value="REIT" name="asset_class">REIT</option>
        </select>
      </div>
      <div>
        時価総額: <input type="text" name="balance">
      </div>
      
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>