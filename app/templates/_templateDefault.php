<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo  $this->data['title']; ?></title>
</head>
<body>

<ul>
    <li>
        <a href="index.php">Главная страница</a>
    </li>
    <li>
        <a href="index.php?do=gallery">Наша фото галерея</a>
    </li>
    <li>
        <a href="index.php?do=trains">Расписание поездов</a>
    </li>
</ul>
<hr>

<?php
include $content;
?>

</body>
</html>