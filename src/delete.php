<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1516808-final';
    const USER = 'LAA1516808';
    const PASS = 'Pass1007';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/select.css">
</head>
<body>
   <?php
 $pdo=new PDO($connect, USER, PASS);
   $sql=$pdo->prepare('delete from anime where anime_id=?');
   if($sql->execute([$_GET['id']])){
    echo '削除に成功しました。';
}else{
    echo '削除に失敗しました。';
} 
   ?> 
   <br><hr><br>
   <table>
   <tr><th>ID</th><th>アニメ名</th><th>ジャンル</th><th>作者名</th><tr>
   <?php
   $pdo=new PDO($connect, USER, PASS);
	foreach ($pdo->query('select * from anime') as $row) {
      echo '<tr>';
      echo '<td>',$row['anime_id'] ,'</td>';
      echo '<td>',$row['anime_name'] ,'</td>';
      echo '<td>',$row['zyannru_name'] ,'</td>';
      echo '<td>',$row['sakusya_name'] ,'</td>';
      echo '<td>';
      echo '<a href="delete.php?id=',$row['anime_id'],'">削除</a>';
      echo '</td>';
      echo '</tr>';
      echo "\n";
    }
?>
</table>
<button onclick="location.href='select.php'">削除画面へ戻る</button>
</from>
</body>
</html>