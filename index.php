<!DOCTYPE html>
<html lang="ja">
 <header>
 <meta charset="UTF-8">
  <title></title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <div class="logo">
       <img src="4eachblog_logo.jpg">
      </div>
       <ul>
         <li>トップ</li>
         <li>プロフィール</li>
         <li>4eachについて</li>
          <li>登録フォーム</li>
         <li>お問合せ</li>
         <li>その他</li>
       </ul>
 </header> 
  <body>

  <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt = $pdo->query("select * from 4eache_keijiban");

    
    ?>

   <main>
       <h1>プログラミングに役立つ書籍</h1>
       <form method="post" action="insert.php">
          <h2>入力フォーム</h2>
          <div>
              <label>ハンドルネーム</label>
              <br>
              <input type="text" class="text" size="35" name="handlename">
          </div>

          <div>
             <label>タイトル</label>
             <br>
             <input type="text" class="text" size="35" name="title">
          </div>

          <div>
             <label>コメント</label>
             <br>
             <textarea cols="35" rows="7" name="comments"></textarea>
          </div>

          <div>
             <input type="submit" class="submit" value="投稿する">
         </div>

        </form>

        <div class="kuran">
        </div>

        <?php

          while ($row = $stmt->fetch()){
     
         echo "<div class='kiji'>";
         echo "<h3>".$row['title']."</h3>";
         echo "<div class='contents'>";
         echo $row['comments'];
         echo "<div class='handlename'>posted by".$row['handlename']."</div>";
         echo "</div>";
         echo "</div>";
          }

        ?>

       <div class="kuran">
       </div>

       <?php

while ($row = $stmt->fetch()){

echo "<div class='kiji'>";
echo "<h3>".$row['title']."</h3>";
echo "<div class='contents'>";
echo $row['comments'];
echo "<div class='handlename'>posted by".$row['handlename']."</div>";
echo "</div>";
echo "</div>";
}

?>
  </main>

  <div class="right">
    <h3>人気の記事</h3>
    <ul>
       <li>php　オススメ本</li>
       <li>php Myadminの使い方</li>
       <li>今人気のエディタ top5</li>
       <li>HTMLの基礎</li>
    </ul>
     <h3>オススメリンク</h3>
     <ul>
       <li>インターノウス株式会社</li>
       <li>XAMPPのダウンロード</li>
       <li>Edclipseのダウンロード</li>
       <li>Bracketsのダウンロード</li>
     </ul>
      <h3>カテゴリ</h3>
     <ul>
       <li>HTML</li>
       <li>PHP</li>
       <li>MySQL</li>
       <li>javaScript</li>
     </ul>
  </div>
  </body>

  <footer>
     <div class="sss">

     </div>
     
     copyright ©︎ internous| 4each blog the which provides A to Z about programming.
    
    </footer>
  

</html>