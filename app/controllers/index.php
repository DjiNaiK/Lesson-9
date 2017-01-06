<?php
$Content = new \app\classes\models\Content();

$view->assign('title', 'Добро пожаловать в Кикиморовск!')
     ->assign('content', $Content->getContentByName('index'));