<?php
$newVar['dateStart'] = $_POST['dateStart'];
$newVar['dateFinish'] = $_POST['dateFinish'];
$newVar['finishCity'] = $_POST['finishCity'];

$Trains = new \app\classes\models\Trains();
$Trains->addTrain($newVar);

    $view
        ->assign('title', 'Запись добавлена')
        ->assign('refreshURL', 'index.php?adminPIN=42&do=trains');