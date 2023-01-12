<?php
//1. POSTデータ取得
$namea = $_POST['namea'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$dogname = $_POST['dogname'];
$koumoku = $_POST['koumoku'];
$naiyou = $_POST['naiyou'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/ankertconfirm.css">
  <title>お問い合わせ</title>
</head>
<body>
  

<div>
    <form action="ankertInsert.php" method="post">
            <input type="hidden" name="namea" value="<?php echo $namea; ?>">
            <input type="hidden" name="address" value="<?php echo $address; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="dogname" value="<?php echo $dogname; ?>">
            <input type="hidden" name="koumoku" value="<?php echo $koumoku; ?>">
            <input type="hidden" name="naiyou" value="<?php echo $naiyou; ?>">
          
            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div>
                <div>
                    <label>お名前</label>
                    <p><?php echo $namea; ?></p>
                </div>
                <div>
                    <label>ふりがな</label>
                    <p><?php echo $address; ?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php echo $tel; ?></p>
                </div>
                <div>
                    <label>電話番号</label>
                    <p><?php echo $dogname; ?></p>
                </div>
                <div>
                    <label>犬の名前</label>
                    <p><?php echo $koumoku ?></p>
                </div>
                <div>
                    <label>お問い合わせ項目</label>
                    <p><?php echo $naiyou; ?></p>
                </div>
             
            </div>
        <input type="button" value="内容を修正する" onclick="history.back(-1)" class="inputsyusei">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>



</body>
</html>











