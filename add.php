<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №3, п.1</title>
</head>
<body>

    <form action="index.php" method="post">
        <p>Имя файла:<input type="text" name="filename" required></p>
        <p>Текст:<br/>
           <textarea rows="30" cols="160" name="filetext"><?php echo $text ?></textarea></p>
        <p><input type="submit" value="Добавить"></p>
    </form>

</body>
</html>
