<html>
<head>
<link rel="stylesheet" href="./css/searchbox.css">
</head>


<body>
<div id="whole">

    <h1>検索</h1>

     <!-- フォームここから -->
    <form action="../search.php" method="post">

        <?php 
          $today = date('Y/m/d');
          echo $today;
         ?>     
                  
                <input type="text" name="search">

                <input type="submit" class="btnsb"  value="array_change_key_case">
      </form>
    <!-- フォーム↑ここまで -->

      <div class="btn">
      <button class="btn-border"  onclick="location.href='top.php'">TOP</button>
      <button class="btn-border"  onclick="location.href='index.php'">入力</button>
      <button class="btn-border"  onclick="location.href='select.php'">一覧</button>
       </div>
</div>


</body>
</html> 