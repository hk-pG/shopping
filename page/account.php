<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../css/website.css">
  <title>昆虫食専門店ログイン</title>
</head>

<body>
  <?php
    session_start();
    
  ?>
  <h2>アカウント</h2>
  <div class="account-main">

    <div class="left">
      <img src="../image/userIcon.png" width="100%">
    </div>
    <form action="./../phpFunc/acountFix.php" method="get">
      <div class="right">
        アカウント名<br>
        <input type="text" id="name" name="name"><br><br><br>
        Email<br>
        <input type="text" id="id" name="Email"><br><br><br>
        パスワード<br>
        <input type="text" id="password" name="password"><br><br><br>
        お届先住所<br>
        <input type="text" id="address" name="address"><br><br><br>
        <!-- <button id="apply">適用</button> -->
        <input type="submit" id="address" value="適用">
        <a href="">ログアウト</a>
      </div>
    </form>

  </div>
</body>

</html>