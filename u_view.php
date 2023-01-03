
<?php
$id = $_GET["id"];
echo $id;

// exit;


// DB接続
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=imageposting;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


// SQL文を用意
$stmt = $pdo->prepare("SELECT * FROM  comments  WHERE image_id=:id");//image_idにするのがポイント
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();


//データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
//   //elseの中はSQL実行成功した場合
//   //Selectデータの数だけ自動でループしてくれる
//   //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
$row = $stmt->fetch();

// //消さない
}

?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <style>
    #comment{
      display: flex;    
    }

    .checkboxTitle{
      font-weight: bold;
    }
    .a{
      width: 1000px;
    }
    .b{
      width: 1000px;
    }

  </style>
  <title>画像投稿アプリ</title>
</head>
<body>
  <?php include('./dbConfig.php') ?>
  <?php include('./getDatas.php') ?>
  <?php include('./html/header.php') ?>


  <div class="detailImageBox">
    <div class="detailImage">
      <img src="./images/<?php echo $data['image']['file_name']; ?>" alt="投稿画像">
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
        <form action="../updateComment.php?image_id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
         <input type="text"  name="ああああ" >
         <p class="checkboxTitle">症状</p>
         <div class="checkbox">
            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">下痢
            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">便秘
            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">皮膚のトラブル
            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">心臓のトラブル
            </br><input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">肝臓のトラブル
            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">泌尿器のトラブル
            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">免疫サポート
          </div>

          <textarea name="comment" id="comment" cols="40" rows="10" placeholder="材料" value="<?=$row["comment"]?>"></textarea>
          <textarea name="comment2" id="comment" cols="40" rows="10" placeholder="作り方" value="<?=$row["comment2"]?>"></textarea>
        
          <button type="submit" name="submit">送信</button>

        </form>
        <div class="detailImagButton">
            <button class="updateButton" onclick="location.href='./postImageForm.php?id=<?php echo $_GET['id'];?>';">更新</button>
            <button class="deleteButton" onclick="location.href='../deleteComment.php?id=<?php echo $_GET['id'];?>';">削除</button>
         </div>

     

      </div>
  </div>
</div>
</body>
</html>


