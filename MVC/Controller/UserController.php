<?php
namespace App\Controller;
use App\Model\UserModel;

class UserController extends BaseController
{
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function showAll()
    {
        $users = $this->model->getAll();
        include_once "MVC/View/user/list.php";
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