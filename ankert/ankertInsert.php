<?php
//1. POSTデータ取得
$namea = $_POST['namea'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$dogname = $_POST['dogname'];
$koumoku = $_POST['koumoku'];
$naiyou = $_POST['naiyou'];
$syokuyoku = $_POST['syokuyoku'];
// $syokuyoku = implode(',', $_POST['syokuyoku']);//これでcheckboxをDBに入れられた！



//2. DB接続のおまじない
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=imageposting;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成

// (1). SQL文を用意
// $stmt = $pdo->prepare("INSERT INTO
//                         gs_cm_table(id, feeling, text, img, date)
//                         VALUES(NULL, :feeling, :text, :img, sysdate() )");

$stmt = $pdo->prepare("INSERT INTO
ankert(id, namea, address, tel, dogname, koumoku, naiyou, syokuyoku,  date)
VALUES(NULL, :namea, :address, :tel, :dogname, :koumoku, :naiyou, :syokuyoku, sysdate() )");



//(2). バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':namea', $namea, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':tel', $tel, PDO::PARAM_INT);
$stmt->bindValue(':dogname', $dogname, PDO::PARAM_STR);
$stmt->bindValue(':koumoku', $koumoku, PDO::PARAM_STR);
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);
$stmt->bindValue(':syokuyoku', $syokuyoku, PDO::PARAM_STR);


//  (3). 実行
$status = $stmt->execute();
var_dump("bb");


//４．データ登録処理後
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location:' . 'aftersubmit.php',true,303);
}

?>


