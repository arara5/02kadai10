<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php" enctype="multipart/form-data">
  <div class="jumbotron">
   <fieldset>
    <legend>コンペ履歴</legend>
    <label>商品カテゴリー：<input type="text" name="pname"></label><br>
     <label>担当者：<input type="text" name="name"></label><br>
    
     <label>結果：<input type="radio" name="kekka" value="受注" checked="checked">受注
                 <input type="radio" name="kekka" value="失注" checked="checked">失注
                 </label><br>
     <label>コメント</label><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="file" name="upfile">
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
