<?php
session_start();
require_once('funcs.php');
loginCheck();



function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES);//dbの中に入ることは問題なくHTMLで表示されるのを防ぐためにやる
}


// DB接続のおまじない
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=imageposting;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM ankert;");
$status = $stmt->execute();

//データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //elseの中はSQL実行成功した場合
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php

  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {


$namea= $result['namea'];
$address = $result['address'];
$tel = $result['tel'];
$date= $result['date'];
$id= $result['id'];
$koumoku= $result['koumoku'];
$naiyou= $result['naiyou'];


// echo '<pre>';
// var_dump($delete);
// echo'</pre>';


$view.="
<tr>
<th>$id</th>
<th>$namea</th>
<th>$address</th> 
<th>$tel</th>
<th>$koumoku</th>
<th>$naiyou</th>
<th>$date</th>
</tr>
";

//消さない
}
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>表示</title>
<link rel="stylesheet" href="../css/ankertselect.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">

<header>

</header>
<div class="a">
  <h1>食事相談依頼一覧</h1>
  <h2>未完了分</h2>
    <table border="1" class="table">

        <tr>
        <th>No.</th>
        <th>お名前</th>
        <th>メールアドレス</th>
        <th>電話番号</th>
        <th>相談項目</th>
        <th>相談内容</th>
        <th>日付</th>
        </tr>
    
    <?= $view ?></table>  <!-- 26行目のview -->   
</div> 

</body>
</html>