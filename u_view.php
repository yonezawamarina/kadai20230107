<?php
$id = $_GET["id"];//ここまでOK
echo $id;

// DB接続
try {
  $pdo = new PDO('mysql:dbname=imageposting;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}
// echo '<pre>';
// var_dump($pdo);
// echo '<pre>';

// SQL文　commentsテーブルからimage_idを取得
$stmt = $pdo->prepare("SELECT * FROM  comments  WHERE image_id=:id");//image_id
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

// echo '<pre>';
// var_dump($status);
// echo'</pre>';

//データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
//   //elseの中はSQL実行成功した場合
$row = $stmt->fetch();


// echo '<pre>';
// var_dump($row);
// echo'</pre>';


// //消さない
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>更新</title>
</head>
<body>
    <?php include('./dbConfig.php') ?> 
    <?php include('./getDatas.php') ?>
    <?php include('./html/header.php') ?>


    <div class="detailImageBox">
                <div class="detailImage">
           
          
                <img src="../images/<?php echo $data[0]['file_name'];?>" alt="投稿画像">
                <?php var_dump($data[0]['file_name']) ?>;
              


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
                      <?php for($i=0; $i < isset($countComment); $i++) { ?>

                        <!-- <?php echo '<pre>';
                          var_dump($countComment);
                          echo'</pre>'?>; -->
                        <li><?php echo $data['comments'][$i]['comment']; ?></li>
                    
                      <?php } ?>
                  </ul>
            
                  <ul class="b">
                    <p class="commentTitle">作り方</p>
                      <?php for($i=0; $i < isset($countComment); $i++) { ?>
                        <li><?php echo $data['comments'][$i]['comment2']; ?></li>
                      <?php } ?>
                  </ul>
              </div>

              <div class="submitComment">
                  <form action="./updateComment.php?image_id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
                        <p class="checkboxTitle">症状</p>
                        <div class="checkbox">
                            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">下痢
                            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">便秘
                            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">皮膚のトラブル
                            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">心臓のトラブル
                            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">肝臓のトラブル
                            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">泌尿器のトラブル
                            <input type="checkbox" name="symptoms[]"  value="<?=$row["symptoms"]?>">免疫サポート
                          </div>

                          <textarea name="comment" id="comment" cols="40" rows="10" placeholder="材料"> <?=$row["comment"]?></textarea>
                          <textarea name="comment2" id="comment" cols="40" rows="10" placeholder="作り方"> <?=$row["comment2"]?></textarea>
                        
                          <button type="submit" name="submit">送信</button>
                  </form>
              </div>
        </div>
    </div>
</body>
</html>


