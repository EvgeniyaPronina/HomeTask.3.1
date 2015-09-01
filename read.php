<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №3, п.1</title>
</head>
<body>

<?php
$curFile = $_GET['name'];
$text = file_get_contents("files/$curFile");
echo nl2br($text);

//echo mb_detect_encoding($text);
//echo gettype($text);
?>

<p><a href="index.php">На главную</a></p>

</body>
</html>


