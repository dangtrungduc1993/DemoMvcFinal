<?php

namespace App\Model;

class BaseModel implements BaseInterface
{
    public $connect;
    public $table;
    public function __construct()
    {
        $db = new DBConnect();
        $this->connect = $db->connect();
    }


    public function getAll($orderBy = "ASC")
    {
        $sql = "select * from ".$this->table." order by name $orderBy";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "select * from $this->table where id = ".$id;
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function deleteById($id)
    {
        try {
            $sql = "delete from $this->table where id = ".$id;
            $this->connect->query($sql);
        }catch (\PDOException $exception){
            echo $exception->getMessage();
        }
    }
}