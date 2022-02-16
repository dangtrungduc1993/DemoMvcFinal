<?php

namespace App\Model;
class PostModel extends BaseModel
{
    public $table = "posts";

    public function getAll($orderBy = "ASC")
    {
        $sql = "select posts.id as id, title , content, users.name as userName, categories.name as categoryName  
                from posts join users on user_id = users.id 
               join categories on category_id = categories.id ";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function create($data)
    {
        $sql = "insert into $this->table (title, content, user_id, category_id) values (?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["title"]);
        $stmt->bindParam(2,$data["content"]);
        $stmt->bindParam(3,$data["user"]);
        $stmt->bindParam(4,$data["category"]);
        $stmt->execute();
    }
}