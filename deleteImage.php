<?php

include('./dbConfig.php') ;
$targetDirectory = 'images/';
$imageId = $_GET['id'];

if(!empty("$imageId")){
  $sql = "SELECT file_name FROM images WHERE id = " . $imageId;

  $sth = $db->prepare($sql);//準備
  $sth->execute();//実行
  $getImageName = $sth->fetch();//全部取り出す

  $deleteImage = unlink($targetDirectory . $getImageName['file_name']);//imagesフォルダから削除
  
  if($deleteImage){
    $deleteRecord = $db->query("DELETE FROM images WHERE id = ". $imageId);

    if($deleteRecord){
      header('Location:' . './html/index.php',true,303);
      exit();
    }
  }
}
