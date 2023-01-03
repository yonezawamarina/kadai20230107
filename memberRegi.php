<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .register{
    display: flex;
      flex-direction: column;
      width: 300px;
    }
  </style>
  <title>会員登録</title>
</head>
<body>
<div id="whole">

<h1>会員登録</h1>


 <!-- フォームここから -->
<form action="insert.php" method="post"  enctype="multipart/form-data">

    <?php 
      $today = date('Y/m/d');
      echo $today;
     ?>     
              
             <div class="register">
              <input type="text" name="u_name" placeholder="氏名">
              <input type="text" name="u_id"  placeholder="ID">
              <input type="text" name="u_pw" placeholder="PW">
            </div>

            <input type="submit" class="btnsb"  value"送信">
  </form>


</body>
</html>