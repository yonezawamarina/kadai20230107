<head>
  <title>Document</title>
  <link rel="stylesheet" href="../css/top.css">
</head>
<body>
  <div class="start">
      <p><img src="../images/inuneko.jpg" alt=""></p>
  </div>

  <div class="btnwrapper">
      <button class="btn-border1"  onclick="location.href='./login.php'" >Sign In</button>
      <p>↓会員登録がまだの方はこちらから</p>
      <button class="btn-border2"  onclick="location.href='../html/memberRegi.php'">Create Account</button>
  </div>
  


 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
  $(function() {
    setTimeout(function(){
      $('.start p').fadeIn(2000);
    },800); //0.5秒後にロゴをフェードイン!
    setTimeout(function(){
      $('.start').fadeOut(500);
    },900); //2.5秒後にロゴ含め真っ白背景をフェードアウト！
  });
  
  </script>

</body>
</html>