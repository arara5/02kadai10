<?php
session_start();

//表示する"id"を取得
$id = filter_input( INPUT_GET, "id" );

//外部ファイル読み込み
//include "../../includes/funcs.php";
include "funcs.php";

//認証チェック
sessChk();

//DB接続
$pdo = db_con();

//データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    $row = $stmt->fetch();
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
    <?php echo $_SESSION["name"]; ?>さん　
    <?php include("menu.php"); ?>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新：フリーアンケート</legend>
    <label>商品カテゴリー：<input type="text" name="pname" value="<?php echo $row["pname"]; ?>"></label><br>
     <label>担当者：<input type="text" name="name" value="<?php echo $row["name"]; ?>"></label><br>
     <label>結果：<input type="radio" name="kekka" value="受注" checked="checked">受注
                 <input type="radio" name="kekka" value="失注"checked="checked">失注
                 </label><br>
     <label>コメント</label><br>
     
     
     <label><textArea name="naiyou" rows="4" cols="40"><?php echo $row["naiyou"]; ?></textArea></label><br>
     <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
