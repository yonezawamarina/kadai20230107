<?php
//POSTデータ取得
session_start();
$u_name = $_POST['u_name'];
$u_id = $_POST['u_id'];
$u_pw = $_POST['u_pw'];


//DB接続
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=imageposting;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO
user_table(id, u_name, u_id, u_pw)
VALUES(NULL, :u_name, :u_id, :u_pw)");


//バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':u_name', $u_name, PDO::PARAM_STR);
$stmt->bindValue(':u_id', $u_id, PDO::PARAM_STR);
$stmt->bindValue(':u_pw', $u_pw, PDO::PARAM_STR);
// $stmt->bindValue(':img', $img, PDO::PARAM_STR);

// 実行
$status = $stmt->execute();


//データ登録処理後
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //index.phpへリダイレクト
  header('Location: ' . './ankert/ankert.php', true, 303);
}



//SQL実行後にエラーがある場合
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location:' . './html/index.php',true,303);
}




?>

