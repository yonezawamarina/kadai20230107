<?php

$id = $_GET["id"];

//DB接続
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=imageposting;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

// SQL文を用意
$stmt = $pdo->prepare("DELETE FROM  comments  WHERE image_id=:id");//image_idにするのがポイント
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();


//データ登録処理後
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location:' . './html/index.php',true,303);
}
