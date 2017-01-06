<?php
namespace app\classes;

use PDO;

class Db
{
    protected $dbh;

    public function __construct() {
        $connectDB = include __DIR__ . '/../cfgDB.php';
        $this->dbh = new PDO($connectDB['base'], $connectDB['login'], $connectDB['pass']);
    }
    
    public function execute($sql){
        return $this->dbh->prepare($sql)->execute();
    }

   public function query($sql, array $data){

        $sth = $this->dbh->prepare($sql);

            if( true == $sth->execute($data) ){
                return $sth->fetchAll(PDO::FETCH_OBJ);
            } else {
                return false;
            }
    }

    //добавил новый класс для загрузки фоток
    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }
}