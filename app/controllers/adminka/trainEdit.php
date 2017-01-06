<?php
$trainID = $_GET['id'] ?? 1;
$getTrain = new \app\classes\models\Trains();

$view->assign('train', $getTrain->getTrainById($trainID));