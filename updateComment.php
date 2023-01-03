<?php

// include('./dbConfig.php');

// $targetDirectory = 'images/';
// $fileName = basename($_FILES["file"]["name"]);
// $targetFilePath = $targetDirectory . $fileName;
// $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
// $imageId = $_GET['id'];

// if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($fileName)) {
//     $arrImageTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
//     if (in_array($fileType, $arrImageTypes)) {
//       $sql = "SELECT file_name FROM images WHERE id = " . $imageId;

//       $sth = $db->prepare($sql);//準備
//       $sth->execute();//実行
//       $getImageName = $sth->fetch();//全部取り出す

//       $deleteImage = unlink($targetDirectory . $getImageName['file_name']);//imagesフォルダから削除
  
//       if($deleteImage){
//       $uploadImageForServer = move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
      
//       if($uploadImageForServer){
//          $update = $db->query("UPDATE  images SET file_name = '" . $fileName . "' WHERE id = ". $imageId);

//         header('Location:' . './html/index.php',true,303);
//         exit();
//     }
//   }
// }
// }









$id = $_POST["id"];
$comment = $_POST["comment"];
$comment2 = $_POST["comment2"];
$symptoms = $_POST["symptoms"];


// DB接続
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=imageposting;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}



// SQL文を用意
$stmt = $pdo->prepare("UPDATE comments SET  comment=:comment , comment2=:comment2 ,symptoms=:symptoms WHERE image_id=:id");
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$stmt->bindValue(':comment2', $comment2, PDO::PARAM_STR);
$stmt->bindValue(':symptoms', $symptoms, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();



//４．データ登録処理後
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location:' . './html/index.php',true,303);
}


