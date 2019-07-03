<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="select.php">コンペ履歴</a>　
      
      <?php if($_SESSION["kanri_flg"]=="1"){ ?>
          <a class="navbar-brand" href="user.php">メンバー登録</a>　
          <a class="navbar-brand" href="user_select.php">メンバ一覧</a>　
      <?php } ?>

      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>