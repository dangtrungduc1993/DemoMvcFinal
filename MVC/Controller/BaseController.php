<?php

namespace App\Controller;

abstract class BaseController
{
    public $model;

    public abstract function showAll();
    public abstract function showById($id);
    public abstract function deleteById($id);

    public function uploadImage($name = "default.jpg")
    {
        $target_dir = "uploads/";
        $target_file = $target_dir .time(). basename($_FILES["fileToUpload"]["name"]);
        $default = $target_dir.$name;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return $default;
        }
    }

}