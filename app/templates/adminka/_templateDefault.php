<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <?php if(isset($this->data['refreshURL'])) { ?>
        <meta http-equiv="Refresh" content="5; url=<?php echo $this->data['refreshURL']; ?>" />
    <? } ?>
    <title><?php echo  $this->data['title']; ?></title>
</head>
<body>

<ul>
    <li>
        <a href="index.php?adminPIN=42&do=adminka">Редактировать приветствие</a>
    </li>
    <li>
        <a href="index.php?adminPIN=42&do=loadPhoto">Загрузить фотографию в галерею</a>
    </li>
    <li>
        <a href="index.php?adminPIN=42&do=trains">Редактировать расписание поездов</a>
    </li>
</ul>
<hr>

<?php
include $content;
?>

</body>
</html>