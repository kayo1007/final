<?php
    $pdo = new PDO(
        'mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1516808-final;charset=utf8',
        'LAA1516808',
        'Pass1007'
    );
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/select.css">

</head>
<body>
    <?php
        $sql = $pdo->prepare('insert into anime(anime_name, zyannru_name, sakusya_name) values(?,?,?)');
        
        if (empty($_POST['anime_name'])) {
            echo 'アニメ名を入力してください';
        } else if (empty($_POST['zyannru_name'])) {
            echo 'ジャンルを入力してください';
        } else if (empty($_POST['sakusya_name'])) {
            echo '作者名を入力してください';
        } else if ($sql->execute([$_POST['anime_name'], $_POST['zyannru_name'], $_POST['sakusya_name']])) {
            echo '<font color="red">追加に成功しました。</font>';
        } else {
            echo '<font color="red">追加に失敗しました。</font>';
        }
    ?>

    <br><hr><br>

    <?php
        echo '<table>';
        echo '<tr><th>アニメ名</th><th>ジャンル</th><th>作者名</th></tr>';
        
        foreach ($pdo->query('select * from anime') as $row) {
            echo '<tr>';
            echo '<td>', $row['anime_id'], '</td>';
            echo '<td>', $row['anime_name'], '</td>';
            echo '<td>', $row['zyannru_name'], '</td>';
            echo '<td>', $row['sakusya_name'], '</td>';
            echo '</tr>';
            echo "\n";
        }
    ?>
    </table>

    <form action="select.php" method="post">
        <button type="submit">TOPへ戻る</button>
    </form>
</body>
</html>