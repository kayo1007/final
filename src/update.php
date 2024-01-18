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
		<title>練習6-8-edit</title>
        <link rel="stylesheet" type="text/css" href="CSS/select.css">

	</head>
	<body>

        <?php
    echo '<table>';
    echo '<tr><th>ID</th><th>アニメ名</th><th>ジャンル</th><th>作者名</th></tr>';

    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('select *  from anime where anime_id=?');
    $sql->execute([$_GET['id']]);


	foreach ($sql as $row) {
        echo '<tr>';
		echo '<form action="update-Completed.php" method="GET">';
        echo '<td> ';
		echo '<input type="text" name="anime_id" value="', $row['anime_id'], '">';
		echo '</td> ';
		echo '<td>';
		echo '<input type="text" name="anime_name" value="', $row['anime_name'], '">';
		echo '</td> ';
		echo '<td>';
		echo ' <input type="text" name="zyannru_name" value="', $row['zyannru_name'], '">';
		echo '</td> ';
        echo '<td>';
        echo '<input type="text" name="sakusya_name" value="', $row['sakusya_name'], '">';
		echo '</td> ';
		echo '<td>';
		echo '<td><input type="submit" value="更新"></td>';
		echo '</form>';
        echo '</tr>';
		echo "\n";
	}
?>
</table>
<button onclick="location.href='select.php'">トップへ戻る</button>
    </body>
</html>
