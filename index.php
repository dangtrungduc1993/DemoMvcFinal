<?php
session_start();
//require "vendor/autoload.php";
use App\Controller\AuthController;
use App\Controller\CategoryController;
use App\Controller\PostController;
use App\Controller\UserController;

require __DIR__ . "/vendor/autoload.php";

$userController = new UserController();
$postController = new PostController();
$categoryController = new CategoryController();
$authController = new AuthController();

$page = $_GET["page"] ?? "";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    switch ($page) {
        case "user-list":
            $userController->showAll();
            break;
        case "post-list":
            $postController->showAll();
            break;
        case "category-list":
            $categoryController->showAll();
            break;
        case "post-create":
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $postController->showFormCreate();
            } else {
                $postController->create($_POST);
            }
            break;
        case "login":
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $authController->showFormLogin();
            } else {
                $authController->login($_REQUEST);
            }
            break;
        case "logout":
            $authController->logout();
            break;
        default:
            header("location:index.php?page=login");
    }
    ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>
