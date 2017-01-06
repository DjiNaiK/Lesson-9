<?php
$addRecord = $db->execute('
DELETE FROM trains WHERE id='.$_GET['id'].' LIMIT 1');

if ($addRecord == True){
    $view
        ->assign('title', 'Запись удалена')
        ->assign('refreshURL', 'index.php?adminPIN=42&do=trains');
} else {
    exit;
}