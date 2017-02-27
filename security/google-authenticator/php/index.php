<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>index</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/carousel.css" rel="stylesheet">
  <link href="../css/nav.css" rel="stylesheet">
  <link href="../css/index.css" rel="stylesheet">
</head>
<body>

<!--顶部导航条-->
<?php include("nav.php") ?>

<!--图片区-->
<div class = "nav-background-img"></div>

<div class="line container"><span>登录信息</span></div>

  <!--正文-->
  <div class="container">
    <!--登录表单-->
    <form class="form-signin all-info info_all" action = "logchk.php" method="get">
        <ul class="login-info">
          <li><span class = 'glyphicon glyphicon-user text-icno'></span><input type="text" placeholder="请输入用户名" name = "username" class="text-info"></li>
          <li><span class = 'glyphicon glyphicon-lock text-icno'></span><input type="password" placeholder="请输入密码" name = "userpwd" class="text-info"></li>
          <li><span class = 'glyphicon glyphicon-lock text-icno'></span><input type="password" placeholder="请输入验证码" name = "userpwd2" class="text-info"></li>
          <li class="info_item_btn"><button type="submit" class="btn btn-info btn-block btn-style">登录</button></li>
        </ul>
    </form>
  </div>

  <!--页脚-->
  <?php include("footer.php") ?>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>