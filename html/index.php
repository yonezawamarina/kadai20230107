<!-- topページ -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>犬健康レシピ</title>
</head>
<body>
  <?php include('../dbConfig.php') ?>
  <?php include('../getDatas.php') ?>
  <?php include('./header.php') ?>

  <h1>投稿者用マイページ</h1>
  <div class="imageList">
     <?php foreach ($data as $image){?>  <!--$dataはgetDatas.phpでSELECT文でとってきた画像データ、 $imageは1レコード分のデータが入っている-->
    <a href="./imageDetail.php?id=<?php echo $image['id'];?>"><img src="../images/<?php echo $image['file_name'];?>" alt="投稿画像"></a>
     <?php };?>
</div>
</body>
</html>