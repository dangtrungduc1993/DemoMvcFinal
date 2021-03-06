<?php
if(!isset($_SESSION["user"])){
    header("location:index.php?page=login");
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=user-list">User</a>
                    <a class="dropdown-item" href="index.php?page=post-list">Post</a>
                    <a class="dropdown-item" href="index.php?page=category-list">Category</a>
                    <div class="dropdown-divider"></div>
                    <!--                    <a class="dropdown-item" href="#">Something else here</a>-->
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <!--        <form class="form-inline my-2 my-lg-0">-->
        <!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
        <!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
        <!--        </form>-->
        <div>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    <?php echo $_SESSION["user"]->name ?? ""?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=user-list">User</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?page=logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>