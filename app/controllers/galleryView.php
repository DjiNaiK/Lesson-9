<?php
$imgID = $_GET['n'] ?? 1;
$getGallery = new \app\classes\models\Gallery();

$view
    ->assign('img', $getGallery->getPhoto($imgID))
    ->assign('imgPrev', $getGallery->getPhoto($imgID-1))
    ->assign('imgNext', $getGallery->getPhoto($imgID+1));

//imgPrev: проверяем а есть ли пред.фотография?
//imgNext: проверяем а есть ли след.фотография?