<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  
  <title>画像投稿アプリ</title>
</head>
<body>
  <?php include('../dbConfig.php') ?>
  <?php include('../getDatas.php') ?>
  <?php include('./header.php') ?>


  <div class="detailImageBox">
    <div class="detailImage">
      <img src="../images/<?php echo $data['image']['file_name']; ?>" alt="投稿画像">
      <div class="detailImagButton">
        <button class="updateButton" onclick="location.href='./postImageForm.php?id=<?php echo $_GET['id'];?>';">更新</button>
        <button class="deleteButton" onclick="location.href='../deleteImage.php?id=<?php echo $_GET['id'];?>';">削除</button>
      </div>
      <button onclick="location.href='./index.php';">戻る</button>
    </div>

    <div class="comment">
     <div id="comment">
        <ul class="a">
          <p class="commentTitle">材料</p>
            <?php for($i=0; $i < $countComment; $i++) { ?>
              <li><?php echo $data['comments'][$i]['comment']; ?></li>
            <?php } ?>
        </ul>
   
        <ul class="b">
          <p class="commentTitle">作り方</p>
            <?php for($i=0; $i < $countComment; $i++) { ?>
              <li><?php echo $data['comments'][$i]['comment2']; ?></li>
            <?php } ?>
        </ul>
      </div>

      <div class="submitComment">
        <form action="../postComment.php?image_id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">

        <div class="checkbox">
          <p class="checkboxTitle">症状</p>
              <input type="checkbox" name="symptoms[]" value="下痢">下痢
              <input type="checkbox" name="symptoms[]" value="便秘">便秘
              <input type="checkbox" name="symptoms[]" value="皮膚のトラブル">皮膚のトラブル
              <input type="checkbox" name="symptoms[]" value="心臓のトラブル">心臓のトラブル
              </br><input type="checkbox" name="symptoms[]" value="肝臓のトラブル">肝臓のトラブル
              <input type="checkbox" name="symptoms[]" value="泌尿器のトラブル">泌尿器のトラブル
              <input type="checkbox" name="symptoms[]" value="免疫サポート">免疫サポート
          </div>

          <textarea name="comment" id="comment" cols="40" rows="10" placeholder="材料"></textarea>
          <textarea name="comment2" id="comment" cols="40" rows="10" placeholder="作り方"></textarea>
        
          <button type="submit" name="submit">送信</button>

        </form>
        
        <div class="detailImagButton">
            <button class="updateButton" onclick="location.href='../u_view.php?id=<?php echo $_GET['id'];?>';">更新</button>
            <button class="deleteButton" onclick="location.href='../deleteComment.php?id=<?php echo $_GET['id'];?>';">削除</button>
        </div>

     

      </div>
  </div>
</div>
</body>
</html>



