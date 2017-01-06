<?php

function __autoload($className){

    $fileName = __DIR__.'/' . str_replace('\\', '/', $className) . '.php';

    if( file_exists($fileName) ){
        require $fileName;
    }
}

$db = new \app\classes\Db();
$view = new \app\classes\View();


//навигация
$adminPIN = $_GET['adminPIN'] ?? 0; //простейшая проверка на пин-код для админки
$do = $_GET['do'] ?? 'index'; //действие от пользователя


if( ( $adminPIN == 0 ) & file_exists(__DIR__ . '/app/templates/' . $do. '.php') ){
    //работаем с пользователем

    $template = __DIR__ . '/app/templates/_templateDefault.php';

    include __DIR__ . '/app/controllers/' . $do. '.php';
     $view->display($template, __DIR__ . '/app/templates/' . $do . '.php');


} else if(( $adminPIN == 42 )
    & file_exists(__DIR__ . '/app/templates/adminka/' . $do. '.php')) {
    //работаем с админкой

    $template = __DIR__ . '/app/templates/adminka/_templateDefault.php';

    include __DIR__ . '/app/controllers/adminka/' . $do. '.php';
     $view->display($template, __DIR__ . '/app/templates/adminka/' . $do. '.php');

} else {
    //на случай ошибочного запроса
    header("HTTP/1.0 404 Not Found");
    exit;
}