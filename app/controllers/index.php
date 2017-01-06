<?php

$view->assign('title', 'Добро пожаловать в Кикиморовск!')
     ->assign('content', $db->query('SELECT text FROM pageContent WHERE contentName="index"',[]));