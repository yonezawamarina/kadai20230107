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


//登録したidがすでに登録されていないかチェック

$sql = "SELECT * FROM user_table WHERE u_id = :u_id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':u_id', $u_id);
$stmt->execute();
$member = $stmt->fetch();
if ($member['u_id'] === $u_id) {
    $msg = '同じメールアドレスが存在します。';
    $link = '<a href="./ankert/ankertmemberRegi.php">戻る</a>';
} else {
    //登録されていなければinsert 
    $sql = "INSERT INTO user_table(id, u_name, u_id, u_pw) VALUES(NULL, :u_name, :u_id, :u_pw)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':u_name', $u_name, PDO::PARAM_STR);
    $stmt->bindValue(':u_id', $u_id, PDO::PARAM_STR);
    $stmt->bindValue(':u_pw', $u_pw, PDO::PARAM_STR);
    $stmt->execute();
    $msg = '会員登録が完了しました';
    $link = '<a href="./ankert/ankertlogin.php">ログインページ</a>';
}
?>

<h1><?php echo $msg; ?></h1><!--メッセージの出力-->
<?php echo $link; ?>
























