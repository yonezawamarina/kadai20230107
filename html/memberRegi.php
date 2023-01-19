<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  </style>
  <link rel="stylesheet" href="../css/memberRegi.css">
  <title>Create Account</title>
</head>
<body>
<div class="form-wrapper">
  <h1>新規会員登録</h1>
  <form action="../insert.php" method="post"  enctype="multipart/form-data">

  <?php 
      $today = date('Y/m/d');
      echo $today;
     ?>     


   <div class="form-item">
      <label for="name"></label>
      <input type="text" name="u_name" required="required" placeholder="name"></input>
    </div>
    <div class="form-item">
      <label for="email"></label>
      <input type="text" name="u_id" required="required" placeholder="ID"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="text" name="u_pw" required="required" placeholder="PW"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="Register"></input>
    </div>
  </form>

</div>





</body>
</html>









<!-- <div id="whole">

<h1>新規会員登録</h1>
 -->

 <!-- フォームここから -->
<!-- <form action="../insert.php" method="post"  enctype="multipart/form-data">

    <?php 
      // $today = date('Y/m/d');
      // echo $today;
     ?>     
              
             <div class="register">
              <input type="text" name="u_name" placeholder="氏名" id="u_name">
              <input type="text" name="u_id"  placeholder="ID" id="u_id">
              <input type="text" name="u_pw" placeholder="PW" id="u_pw">
              <input type="submit" class="btnsb"  value"送信">

            </div>   
  </form>
</div> -->