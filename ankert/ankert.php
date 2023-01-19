<?php


?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/ankert.css">
  <title>お問い合わせ</title>
</head>
<body>
  
<header>

</header>



<form action="ankertconfirm.php" method="post">
  <h1>食事相談フォーム</h1>
  <div>
    <label><span>必須</span>名前</label>
    <input type="text" name="namea" class="text" size="45" value="" />
  </div>
             
  <div>
    <label><span>必須</span>メールアドレス</label>
    <input type="text" name="address" class="text" size="45" value="" />
  </div>

  <div>
    <label><span>必須</span>電話番号</label>
    <input type="text" name="tel" class="text" size="45" value="" />
  </div>

  <div>
    <label><span>必須</span>犬のお名前</label>
    <input type="text" name="dogname" class="text" size="45" value="" />
  </div>
          
  <div class="checkbox">
          <p class="checkboxTitle">食欲について</p>
              <input type="checkbox" name="syokuyoku[]" value="すぐに完食する">すぐに完食する
              <input type="checkbox" name="syokuyoku[]" value="30分以内には食べきる">30分以内には食べきる
              <input type="checkbox" name="syokuyoku[]" value="あまり食欲がない。完食はしない。">あまり食欲がない。完食はしない。
          </div>
 
  <div>
    <label>お問い合わせ項目</label>
    <textarea cols="60" rows="5" name="koumoku" id="comments"></textarea>
  </div>

  <div>
    <label>お問い合わせ内容</label>
    <textarea cols="60" rows="5" name="naiyou" id="comments"></textarea>
  </div>
  <div>
    <button type="submit" name="submit">内容確認</button>
  </div>
</form>




</body>
</html>









<!-- <html>
<head>
<link rel="stylesheet" href="./css/index.css">
<link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">
</head>
<body>
<div id="whole"> -->

    <!-- <h1>send message for future</h1> -->


     <!-- フォームここから -->
    <!-- <form action="insert.php" method="post"> -->

        <?php 
          // $today = date('Y/m/d');
          // echo $today;
         ?>     
                  
                <!-- <p>今の気持ち</p>
                <input type="text" name="feeling">
                <p>内容</p>
                <textarea name="text" id="textarea"></textarea> -->
                <!-- <p>画像貼付</p>
                <input type="text" name="img"> -->
         
                <!-- <input type="submit" class="btnsb"  value"aaaa">
      </form> -->
    <!-- フォーム↑ここまで -->
     
         <!-- api追加部分 -->
              <div>
            <!-- <input type="text" id="key">
            <button id="send">検索</button>
          </div>

          <table id="list" border="solid"  >
            <tr>
              <td>書籍名</td>
              <td>出版社</td>
              <td>サムネイル</td>
            </tr>

          </table> -->
          <!-- ここまで -->




       <!-- <button class="btn-border"  onclick="location.href='top.php'">TOP</button>
       <button class="btn-border"  onclick="location.href='searchbox.php'">検索</button>
       <button class="btn-border"  onclick="location.href='select.php'">一覧</button>
       </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    document.getElementById("send").addEventListener("click",function(){
    const url = "https://www.googleapis.com/books/v1/volumes?q="+$("#key").val();

    $.ajax({
      url: url,
      datatype: "json"
    }).done(function(data) {
      // $( this ).addClass( "done" );

      console.log(data);
      
      const len = data.items.length;
      let html;
      for(let i=0; i<len; i++){
      html+=`
        <tr>
            <td>${data.items[i].volumeInfo.title}</td>
            <td>${data.items[i].volumeInfo.publisher}</td>
            <td>
              <a target="_blank"  href= "${data.items[0].volumeInfo.infoLink}">
              <img src="${data.items[i].volumeInfo.imageLinks.thumbnail}"></td>
              </a>
        </tr>
      `;
     }

      $('#list').empty().append(html).fadeIn(1000);
      // list.appendChild(html);
    });
  }
  )
   


    //textarea欄を入力内容に合わせて高さを変更
    //textareaの要素を取得
    let textarea = document.getElementById('textarea');
    //textareaのデフォルトの要素の高さを取得
    let clientHeight = textarea.clientHeight;

    //textareaのinputイベント
    textarea.addEventListener('input', ()=>{
    //textareaの要素の高さを設定（rows属性で行を指定するなら「px」ではなく「auto」で良いかも！）
    textarea.style.height = clientHeight + 'px';
    //textareaの入力内容の高さを取得
    let scrollHeight = textarea.scrollHeight;
    //textareaの高さに入力内容の高さを設定
    textarea.style.height = scrollHeight + 'px';
});
 -->







  <!-- </script>


</body>
</html>  -->