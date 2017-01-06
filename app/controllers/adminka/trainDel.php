<?php
$trainID = $_GET['id'] ?? 1;

$view->assign('train',
    $db->query('SELECT * FROM trains WHERE id='.$trainID,[]));