<?php
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES);//dbの中に入ることは問題なくHTMLで表示されるのを防ぐためにやる
}


// DB接続
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=imageposting;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM user_table;");
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


// $feeling= $result['feeling'];
// $text = $result['text'];
// $img = $result['img'];
// $date= $result['date'];
// $id= $result['id'];
// $link = '<a href="u_view.php?id='.$result["id"].'">'.'[更新]'."</a>";
// $delete='<a href="delete.php?id='.$result["id"].'">'.'[削除]'."</a>";

$u_name = $result['u_name'];
$u_id = $result['u_id'];
$u_pw = $result['u_pw'];
$id= $result['id'];
$link = '<a href="u_view.php?id='.$result["id"].'">'.'[更新]'."</a>";
$delete='<a href="delete.php?id='.$result["id"].'">'.'[削除]'."</a>";

// echo '<pre>';
// var_dump($delete);
// echo'</pre>';


$view.="
<tr>
<th>$u_name</th>
<th>$u_id</th> 
<th>$u_pw</th>
<th>$link</th>
<th>$delete</th>
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
<link rel="stylesheet" href="./css/select.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">

<header>

</header>
<div class="a">
    <table border="1" class="table">

        <tr>
        <th>氏名</th>
        <th>ID</th>
        <th>PW</th>
        <th>更新</th>
        <th>削除</th>
        </tr>
    
    <?= $view ?></table>  <!-- 26行目のview -->   
</div> 

<div class="b">
    <button class="btn-border"  onclick="location.href='top.php'">TOP</button>
    <button class="btn-border"  onclick="location.href='index.php'">入力</button>
    <button class="btn-border"  onclick="location.href='searchbox.php'">検索</button>
</div>

</body>
</html>