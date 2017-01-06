<?php
$addRecord = $db->execute('
INSERT INTO trains(dateStart, dateFinish, finishCity) VALUES 
("'.$_POST['dateStart'].'", "'.$_POST['dateFinish'].'", "'.$_POST['finishCity'].'")');

if ($addRecord == True){
    $view
        ->assign('title', 'Запись добавлена')
        ->assign('refreshURL', 'index.php?adminPIN=42&do=trains');
} else {
    exit;
}
