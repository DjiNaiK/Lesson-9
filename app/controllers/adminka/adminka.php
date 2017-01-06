<?php
$Content = new \app\classes\models\Content();

$view
    ->assign('title', 'Редактирование приветствие')
    ->assign('content', $Content->getContentByName('index'));