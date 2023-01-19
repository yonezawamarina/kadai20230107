<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/ankertlogin.css">
  <title>ログイン</title>
</head>

<!-- <input type="submit" href="ankertlogout.php"></input> -->
<header>
<div class="navbar-header"><a class="navbar-brand" href="ankertlogout.php">ログアウト</a></div>
</header>

<!-- <button href="ankertlogout.php">ログアウト</button> -->
  
    <div class="form-wrapper">
  <h1>Log In</h1>
  <form  method="post" action="./ankertlogin_act.php">
    <div class="form-item">
      <label for="email"></label>
      <input type="text" name="lid" required="required" placeholder="ID"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="lpw" required="required" placeholder="PW"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="Log In"></input>
    </div>
  </form>
  <div class="form-footer">
    <p><a href="#">Forgot password?</a></p>
  </div>
</div>



</html>





