<?php
if(isset($_FILES['NewFile'])){
    $loadPhoto = new \app\classes\models\LoadPhoto('NewFile');
    $view->assign('statusLoad', $loadPhoto->upload());
}
?>