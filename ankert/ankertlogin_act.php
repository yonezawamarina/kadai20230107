<?php
session_start();
$lid =$_POST["lid"];
$lpw =$_POST["lpw"];

// DB接続
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=imageposting;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//データ取得SQL作成
$sql = "SELECT * FROM user_table WHERE u_id=:lid AND u_pw=:lpw";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$res = $stmt->execute();


//SQL実行後にエラーがある場合
if ($res === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} 

//抽出データ数を取得
$val = $stmt->fetch();//1レコードだけ取得する方法

//該当レコードがあればSESSIONに値を代入
if($val["id"] != ""){
  $_SESSION["chk_ssid"] = session_id();
  $_SESSION["u_name"] = $val['u_name'];
  //login処理OKの場合
  $msg = 'ログインしました。';
   header('Location: ' . '../ankert/ankert.php', true, 303);

}else{
  //login処理NGの場合
// $msg = 'メールアドレスもしくはパスワードが間違っています。';
header('Location: ' . '../ankert/ankertlogin.php', true, 303);

}

// exit();
?>
