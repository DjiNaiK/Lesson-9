<?php
$view
    ->assign('title', 'Расписание поездов из Кикиморовска')
    ->assign('trains',
    $db->query('SELECT * FROM trains ORDER BY dateStart ASC',[]));