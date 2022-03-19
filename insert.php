<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$pdo->exec("insert into 4eache_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");



header("Location:http://localhost/4eache_keijiban/index.php");

?>

<!DOCTYPE html>
<html lang="ja">
 <header>
 <meta charset="UTF-8">
  <title></title>
 <link rel="stylesheet" type="text/css" href="style.css">
 </header>
 <body>
 </body>
</html> 