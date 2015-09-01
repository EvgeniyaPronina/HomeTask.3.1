<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №3, п.1</title>
</head>
<body>

    <?php
    $curFile = $_GET['name'];
    if (!$_POST['editedfile']) {
        $text = file_get_contents("files/$curFile");
    } elseif ($_POST['editedfile']) {
        $edited = $_POST['editedfile'];

        file_put_contents("files/$curFile", $edited);

        $text = file_get_contents("files/$curFile");
    } else {
        echo 'Ошибка при передаче данных';
    }
    ?>

    <form action="" method="post">
        <p><textarea rows="58" cols="160" name="editedfile"><?php echo $text ?></textarea></p>
        <p><input type="submit" value="Редактировать"></p>
    </form>

    <p><a href="index.php">На главную</a></p>

</body>
</html>

