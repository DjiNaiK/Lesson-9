<?php
$varUpdate['name'] = 'index';
$varUpdate['text'] = $_POST['text'];

$Content = new \app\classes\models\Content();
$Content->updateContent($varUpdate);

    $view
        ->assign('title', 'Изменения внесены')
        ->assign('refreshURL', 'index.php?adminPIN=42&do=adminka');