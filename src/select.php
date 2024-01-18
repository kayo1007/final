<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha256-Gn5384xq9R95NZ1FIqzA7EVrAAKPhK9IvBX3ILC9RA=" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../css/select.css">
</head>
<body>
    <h1>アニメ一覧</h1>
    <a href="insert-input.php?id='.$row['anime_id'].'">追加</a>
<?PHP
echo '<table>';
echo '<tr><th>ID</th><th>アニメ名</th><th>ジャンル</th><th>作者名</th></tr>';
    $pdo = new PDO(
        'mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1516808-final;charsetutf8',
        'LAA1516808',
        'Pass1007');

        foreach ($pdo->query('select * from anime') as $row) {
        echo '<tr>';
        echo '<td>',$row['anime_id'] ,'</td>';
        echo '<td>',$row['anime_name'] ,'</td>';
        echo '<td>',$row['zyannru_name'] ,'</td>';
        echo '<td>',$row['sakusya_name'] ,'</td>';
        echo '<td>';
        echo '<a href="update.php?id='.$row['anime_id'].'">更新</a>　';


        echo '<a href="delete.php?id='.$row['anime_id'].'">削除</a>　';


        
        echo '</td>';
        echo '</tr>';
        echo "\n";
        }
    ?>
</body>
</html>