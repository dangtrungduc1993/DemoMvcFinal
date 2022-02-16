<?php

namespace App\Controller;

use App\Model\CategoryModel;
use App\Model\PostModel;

class PostController extends BaseController
{
    protected $categoryModel;
    public function __construct()
    {
        $this->model = new PostModel();
        $this->categoryModel = new CategoryModel();
    }

    public function showAll()
    {
        $posts = $this->model->getAll();
//        echo "<pre>";
//        var_dump($posts);
//        die();
        include_once "MVC/View/post/list.php";
    }

    public function showById($id)
    {
        // TODO: Implement showById() method.
    }

    public function deleteById($id)
    {
        // TODO: Implement deleteById() method.
    }

    public function showFormCreate()
    {
        $categories = $this->categoryModel->getAll("DESC");
        include_once "MVC/View/post/create.php";
    }

    public function create($request)
    {
        $request["user"] = $_SESSION["user"]->id;
        $this->model->create($request);
        header("location:index.php?page=post-list");
    }
}