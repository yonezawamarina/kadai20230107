<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/ankertlogin.css">
  <title>ログイン</title>
</head>

<header>
<div class="navbar-header"><a class="navbar-brand" href="ankertlogout.php">ログアウト</a></div>
</header>
  

<form  method="post" action="./ankertloginmedical_act.php">
    <h1>Login</h1>
    <div class="login">
        <input type="text" name="lid" placeholder="ID" class="id" ></input><br>
        <input type="text" name="lpw" placeholder="PW" class="pw"></input><br>
        <input type="submit" value="ログイン" class="sighninbtn">
    </div>
</form>



</html>