<?php
$Trains = new \app\classes\models\Trains();
$Trains->delTrain($_GET['id']);

    $view
        ->assign('title', 'Запись удалена')
        ->assign('refreshURL', 'index.php?adminPIN=42&do=trains');