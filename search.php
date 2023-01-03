<?php
$search_feeling = $_POST['search'];
// echo '<pre>';
// var_dump($search_feeling);
// echo'</pre>';

function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES);//dbの中に入ることは問題なくHTMLで表示されるのを防ぐためにやる
}

//DB接続
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=imageposting;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM comments WHERE symptoms LIKE '%" . $_POST['search'] . "%' ");
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
  //   $view .= '<p>' . $result['id'] . ' : ' . h($result['food']) . ' / ' 
  //   . h($result['weight']). ' / ' . h($result['walk']) . ' / ' 
   
  //  . h($result['cdt']). ' / ' . h($result['cmt']) . ' / ' . h($result['date']).'</p>';
// $a = $result['id'];
// $feeling= $result['feeling'];
$symptoms = $result['symptoms'];
// $img = $result['img'];
// $date= $result['date'];



$view.="
<tr>
<th>$symptoms</th>
</tr>
";


// $view.="
// <tr>
// <th>$date</th>
// <th>$feeling</th> 
// <th>$text</th>
// <th>$img</th>
// </tr>
// ";

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
<link rel="stylesheet" href="./css/search.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <!-- <a class="navbar-brand" href="index.php">データ登録</a> -->
</header>
   <div class="a">
    <table border="1" class="table" width=500px>
        <!-- <th>id</th> -->
        <!-- <th>日付</th> -->
        <!-- <th>気持ち</th> -->
        <th>内容</th>
        <!-- <th>画像</th> -->
      
    <?= $view ?></table>  <!-- 26行目のview -->    
  </div>
    <div class="b">
        <button class="btn-border"  onclick="location.href='select.php'">一覧</button>
        <button class="btn-border"  onclick="location.href='top.php'">TOP</button>
        <button class="btn-border"  onclick="location.href='index.php'">入力</button>
        <button class="btn-border"  onclick="location.href='searchbox.php'">検索</button>
    </div>
</body>
</html>

