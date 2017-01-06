<?php
$updateRecord = $db->execute('
UPDATE trains SET 
dateStart = "'.$_POST['dateStart'].'", 
dateFinish = "'.$_POST['dateFinish'].'",
finishCity = "'.$_POST['finishCity'].'"
WHERE id = '.$_GET['id']);

if ($updateRecord == True){
    $view
        ->assign('title', 'Изменения внесены')
        ->assign('refreshURL', 'index.php?adminPIN=42&do=trains');
} else {
    exit;
}