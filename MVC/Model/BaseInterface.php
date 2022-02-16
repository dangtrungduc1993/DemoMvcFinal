<?php

namespace App\Model;

interface BaseInterface
{
    public function getAll($orderBy);

    public function getById($id);

    public function deleteById($id);
}