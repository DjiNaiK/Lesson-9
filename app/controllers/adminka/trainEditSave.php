<?php
$varUpdate['dateStart'] = $_POST['dateStart'];
$varUpdate['dateFinish'] = $_POST['dateFinish'];
$varUpdate['finishCity'] = $_POST['finishCity'];
$varUpdate['id'] = $_GET['id'];

$Trains = new \app\classes\models\Trains();
$Trains->updateTrain($varUpdate);

    $view
        ->assign('title', 'Изменения внесены')
        ->assign('refreshURL', 'index.php?adminPIN=42&do=trains');