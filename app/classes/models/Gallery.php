<?php

namespace app\classes\models;


class Gallery
{
    protected $db;

    public function __construct()
    {
        $this->db = new \app\classes\Db;
    }

    public function getAllGallery(){
        return $this->db->query('SELECT * FROM gallery',[]);
    }

    public function getPhoto($id){
        $qData[':id'] = $id;
        return $this->db->query('SELECT * FROM gallery WHERE id=:id',$qData);
    }
}