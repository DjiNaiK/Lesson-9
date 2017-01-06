<?php
namespace app\classes\models;

use app\classes\Db;

class LoadPhoto
{

    protected $new_file;
    public $errorLoad;

    public function __construct($fname) {
        $this->new_file = $fname;
    }

    public function isUploaded() {

        if (0 < $_FILES[$this->new_file]['error']) {
            $this->errorLoad = 'Ошибка файла. Попробуйте ещё раз загрузить<br>';
        } else {
            if ( $_FILES[$this->new_file]['size'] > 2048000 ){
                $this->errorLoad = 'Ошибка: файл более 2 мегабайт<br>';
            }
            if ( ($_FILES[$this->new_file]['type'] != 'image/png')
                && ($_FILES[$this->new_file]['type'] != 'image/jpeg') ){
                $this->errorLoad .= 'Ошибка: допустимы фотографии только формата JPG или PNG<br>';
            }
        }

        if($this->errorLoad == null){
            return null;
             //_ошибок нет
        } else {
            return $this->errorLoad;
             //_были ошибки
        }
    }

    public function upload() {
        $isUploaded = $this->isUploaded();

        if($isUploaded == null) {

            //добавляем запись в БД и генерируем имя согласно ID,
            // дабы случайно не перекрыть фото с существующим названием
            if ($_FILES[$this->new_file]['type'] == 'image/png') {
                $fileType = 'png';
            } else {
                $fileType = 'jpg';
            }
            $this->db = new Db();
            $this->db->execute('INSERT INTO gallery(fileType, title) 
                              VALUES ("'.$fileType.'", "'.$_POST['title'].'")');

            $newName = $this->db->lastInsertId() . '.' . $fileType;

            $res = move_uploaded_file(
                $_FILES[$this->new_file]['tmp_name'],
                __DIR__.'/../../../images/'.$newName
            );

            //загрузка прошла успешно
            return 'Фотография "' . $_FILES[$this->new_file]['name'] . '" успешно загружена в галерею!';
        } else {
            //return false;
            return $isUploaded;
        }
    }

}