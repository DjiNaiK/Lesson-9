<?php
$updateRecord = $db->execute('UPDATE pageContent SET text="'.$_POST['text'].'" WHERE contentName = "index"');

if ($updateRecord == True){
    $view
        ->assign('title', 'Изменения внесены')
        ->assign('refreshURL', 'index.php?adminPIN=42&do=adminka');
} else {
    exit;
}


