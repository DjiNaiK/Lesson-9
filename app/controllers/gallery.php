<?php
$view
    ->assign('title', 'Галерея нашего города!');
    ->assign('gallery',
        $db->query('SELECT * FROM gallery',[]));