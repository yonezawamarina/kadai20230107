<head>
  <title>Document</title>
  <link rel="stylesheet" href="../css/top.css">
</head>
<body>
  <div class="start">
      <p><img src="/images/dogfoods.jpg" alt=""></p>
  </div>

  <div class="btnwrapper">
      <p>飼い主ログインはこちらから</p>
      <button class="btn-border1"  onclick="location.href='./ankertlogin.php'" >Sign In</button>
      <p>相談フォームはこちらから</p>
      <button class="btn-border1"  onclick="location.href='./ankert.php'" >こちら</button>
      <p>病院ログインはこちらから</p>
      <button class="btn-border1"  onclick="location.href='./ankertloginmedical.php'" >Sign In</button>
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