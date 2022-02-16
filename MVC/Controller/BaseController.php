<?php

namespace App\Controller;

abstract class BaseController
{
    public $model;

    public abstract function showAll();
    public abstract function showById($id);
    public abstract function deleteById($id);

}