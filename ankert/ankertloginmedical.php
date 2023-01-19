



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
  
<!-- <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>動物病院<span>Login</span></div>
    </div>
    <br>
    <form  method="post" action="./ankertlogin_act.php">
    <div class="login">
    <input type="text" name="lid" placeholder="ID" class="id" ></input><br>
        <input type="text" name="lpw" placeholder="PW" class="pw"></input><br>
        <input type="submit" value="Login" class="sighninbtn">
    </div>
    </form> -->



    <div class="form-wrapper">
  <h1>動物病院専用　Sign In</h1>
  <form  method="post" action="./ankertloginmedical_act.php">
    <div class="form-item">
      <label for="email"></label>
      <input type="text" name="lid" required="required" placeholder="ID"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="text" name="lpw" required="required" placeholder="PW"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="Sign In"></input>
    </div>
  </form>
  <div class="form-footer">
    <p><a href="#">Forgot password?</a></p>
  </div>
</div>










<!-- <form  method="post" action="./ankertlogin_act.php">
    <h1>Login</h1>
    <div class="login">
        <input type="text" name="lid" placeholder="ID" class="id" ></input><br>
        <input type="text" name="lpw" placeholder="PW" class="pw"></input><br>
        <input type="submit" value="Login" class="sighninbtn">
    </div>
</form>  -->



</html>














<!-- <!DOCTYPE html>
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
        <input type="submit" value="Login" class="sighninbtn">
    </div>
</form>



</html>

<div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>動物病院<span>Login</span></div>
    </div>
    <br>
    <form  method="post" action="./ankertloginmedical_act.php">
    <div class="login">
    <input type="text" name="lid" placeholder="ID" class="id" ></input><br>
        <input type="text" name="lpw" placeholder="PW" class="pw"></input><br>
        <input type="submit" value="Login" class="sighninbtn">
    </div>
    </form> -->