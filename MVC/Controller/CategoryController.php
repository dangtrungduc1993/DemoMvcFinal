<?php

namespace App\Controller;

use App\Model\CategoryModel;

class CategoryController extends BaseController
{
    public function __construct()
    {
        $this->model = new CategoryModel();
    }

    public function showAll()
    {
        $categories = $this->model->getAll();
        include_once "MVC/View/category/list.php";
    }

    public function showById($id)
    {
        // TODO: Implement showById() method.
    }

    public function deleteById($id)
    {
        // TODO: Implement deleteById() method.
    }
}