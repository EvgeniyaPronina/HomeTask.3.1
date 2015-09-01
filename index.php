<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №3, п.1</title>
</head>
<body>
<a href="add.php">Добавить файл</a>
<?php
if ($_POST['filename']) {
    $filename = $_POST['filename'];
    $added = $_POST['filetext'];
    file_put_contents("files/$filename", $added);
}

$dir = 'files';
$files = scandir($dir);
$files = array_diff($files, array('.', '..'));
?>
<br/>
<br/>
<table>
    <?php
    foreach ($files as $file) {?>

    <tr>
        <td>
            <a href="read.php?name=<?php echo $file?>"><?php echo $file?></a>
        </td>
        <td>
            <a href="edit.php?name=<?php echo $file?>">Редактировать файл</a>
        </td>
        <td>
            <a href="delete.php?name=<?php echo $file?>">Удалить файл</a>
        </td>
    </tr>

<?php } ?>

</table>
<br/>

</body>
</html>


