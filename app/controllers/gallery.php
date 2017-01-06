<?php
$getGallery = new \app\classes\models\Gallery();
$view
    ->assign('title', 'Галерея нашего города!')
    ->assign('gallery', $getGallery->getAllGallery());