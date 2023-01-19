<?php
session_start();
// $u_namename =$_SESSION["u_namename"];
$username =$_SESSION["u_name"];

$msg = 'こんにちは'. htmlspecialchars($username, \ENT_QUOTES, 'UTF-8') . ' さん </br>わんちゃんが元気になりますように';
?>


<!-- topページ -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>わんちゃん健康レシピ</title>
</head>
<body>
  <?php include('../dbConfig.php') ?>
  <?php include('../getDatas.php') ?>
  <?php include('./header.php') ?>
  <header>
<div class="navbar-header"><a class="navbar-brand" href="../ankert/ankertlogout.php">ログアウト</a></div>
</header>

  <h1><?php echo $msg; ?></h1>

  <div class="imageList">
     <?php foreach ($data as $image){?>  <!--$dataはgetDatas.phpでSELECT文でとってきた画像データ、 $imageは1レコード分のデータが入っている-->
    <a href="./imageDetail.php?id=<?php echo $image['id'];?>"><img src="../images/<?php echo $image['file_name'];?>" alt="投稿画像"></a>
     <?php };?>
</div>
</body>
</html>