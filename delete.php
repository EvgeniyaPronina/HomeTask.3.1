<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №3, п.1</title>
</head>
<body>
    <?php
        $curFile = $_GET['name'];
        if (!$_POST['deletefile']) {?>

            <a href="read.php?name=<?php echo $curFile?>"><?php echo $curFile?></a>
            <form action="" method="post">
                <p><input type="submit" value="Удалить" name="deletefile"></p>
            </form>

    <?php
    } elseif ($_POST['deletefile']) {
        unlink("files/$curFile");
        echo '<br /> Файл ' . $curFile . ' удален.';
    } else {
        echo 'Ошибка при передаче данных';
    }
    ?>

    <p><a href="index.php">На главную</a></p>

</body>
</html>