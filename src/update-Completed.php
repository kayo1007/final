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
        <link rel="stylesheet" type="text/css" href="CSS/select.css">

	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('update anime set anime_name=?,zyannru_name=?,sakusya_name=? where anime_id=?');
   if($sql->execute([$_GET['anime_name'],$_GET['zyannru_name'],$_GET['sakusya_name'],$_GET['anime_id']])){
        // var_dump($sql);
                echo '<h1>更新に成功しました。</h1>';
            }else{
                echo '<h1>更新に失敗しました。</h1>';
            }
    
?>
        <button onclick="location.href='select.php'">トップへ戻る</button>
    </body>
</html>