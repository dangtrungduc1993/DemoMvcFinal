<?php

namespace App\Model;

class UserModel extends BaseModel
{
    public $table = "users";

    public function checkLogin($email, $password) : bool
    {
        $sql = "select * from $this->table where email=? and password=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->bindParam(2,$password);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function getByEmail($email)
    {
        $sql = "select * from $this->table where email = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}