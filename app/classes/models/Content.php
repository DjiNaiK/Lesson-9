<?php

namespace app\classes\models;


class Content
{
    protected $db;

    public function __construct()
    {
        $this->db = new \app\classes\Db;
    }
    
    public function getContentByName($name){
        $qData[':name'] = $name;
        return $this->db->query('SELECT * FROM pageContent WHERE contentName=:name',$qData);
    }

    public function updateContent($var){
        $this->db->query('
UPDATE pageContent SET
text = :text 
WHERE contentName = :name',$var);
    }
}