<?php
$uri = $_SERVER['REQUEST_URI'];

 if(strpos($uri,'imageDetail.php')!== false){
   $imageId = $_GET['id'];
   $sql = "SELECT * FROM images WHERE id = " . $imageId;

    $sth = $db->prepare($sql);//準備
    $sth->execute();//実行
    $data['image'] = $sth->fetch();//全部取り出す

    //以下コメントの部分
    $sql2 = "SELECT * FROM comments WHERE image_id = " . $imageId . " ORDER BY create_date DESC";

    $sth = $db->prepare($sql2);//準備
    $sth->execute();//実行
    $data['comments'] = $sth->fetchAll();//全部取り出す
    $countComment = count($data['comments']);//コメントの数をカウント
    }else{
    $sql = "SELECT * FROM images ORDER BY create_date DESC"; //sqlからデータを降順でとってくる

      $sth = $db->prepare($sql);//準備
      $sth->execute();//実行
      $data = $sth->fetchAll();//全部取り出す
    }

      return $data; //処理を終了させて呼び出し元に値を返す




