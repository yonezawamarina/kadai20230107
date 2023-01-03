<?php

include('./dbConfig.php');

$targetDirectory = 'images/';
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDirectory . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
$imageId = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($fileName)) {
    $arrImageTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $arrImageTypes)) {
      $sql = "SELECT file_name FROM images WHERE id = " . $imageId;

      $sth = $db->prepare($sql);//準備
      $sth->execute();//実行
      $getImageName = $sth->fetch();//全部取り出す

      $deleteImage = unlink($targetDirectory . $getImageName['file_name']);//imagesフォルダから削除
  
      if($deleteImage){
      $uploadImageForServer = move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
      
      if($uploadImageForServer){
         $update = $db->query("UPDATE  images SET file_name = '" . $fileName . "' WHERE id = ". $imageId);

        header('Location:' . './html/index.php',true,303);
        exit();
    }
  }
}
}

