<?php
$view
    ->assign('title', 'Редактирование приветствие')
    ->assign('content',
    $db->query('SELECT text FROM pageContent WHERE contentName="index"',[]));