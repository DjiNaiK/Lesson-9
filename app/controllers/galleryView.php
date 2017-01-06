<?php
$imgID = $_GET['n'] ?? 1;

$view
    ->assign('img',
        $db->query('SELECT * FROM gallery WHERE id='.$imgID,[]))
    ->assign('imgPrev',
        $db->query('SELECT id FROM gallery WHERE id='.($imgID-1),[]))
    ->assign('imgNext',
        $db->query('SELECT id FROM gallery WHERE id='.($imgID+1),[]));
//imgPrev: проверяем а есть ли пред.фотография?
//imgNext: проверяем а есть ли след.фотография?