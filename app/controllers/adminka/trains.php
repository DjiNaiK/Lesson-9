<?php
$getTrains = new \app\classes\models\Trains();

$view
    ->assign('title', 'Расписание поездов из Кикиморовска')
    ->assign('trains',
        $getTrains->getAllTrains());