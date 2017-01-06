<?php

namespace app\classes\models;

class Trains
{
    protected $db;

    public function __construct()
    {
        $this->db = new \app\classes\Db;
    }

    public function getAllTrains(){
        return $this->db->query('SELECT * FROM trains ORDER BY dateStart ASC',[]);
    }

    public function getTrainById($id){
        $qData[':id'] = $id;
        return $this->db->query('SELECT * FROM trains WHERE id=:id',$qData);
    }

    public function addTrain($var){
        $this->db->query('
INSERT INTO trains (dateStart, dateFinish, finishCity) VALUES
(:dateStart, :dateFinish, :finishCity)',$var);
    }

    public function updateTrain($var){
        $this->db->query('
UPDATE trains SET 
dateStart = :dateStart, 
dateFinish = :dateFinish,
finishCity = :finishCity
WHERE id = :id',$var);
    }

    public function delTrain($id){
        $qData[':id'] = $id;
        $this->db->query('DELETE FROM trains WHERE id=:id LIMIT 1',$qData);
    }
}