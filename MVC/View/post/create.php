<?php include_once "MVC/View/layout/nav.php" ?>

<div class="card" style="width: 100%">
    <div class="card-header">
        CREATE POST
    </div>
    <div class="card-body">
        <form method="post">
            <div class="form-group">
                <label for="post-title">Title</label>
                <input type="text" name="title" class="form-control" id="post-title">
<!--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <div class="form-group">
                <label for="content-post">Content</label>
                <input type="text" name="content" class="form-control" id="content-post">
            </div>
            <div class="form-group">
                <label for="category-post">Category</label>
<!--                <input type="text" name="category" class="form-control" id="category-post">-->
                <select class="form-control" name="category" id="category-post">
                    <?php if (!empty($categories)) {
                        foreach ($categories as $category): ?>
                            <option value="<?php echo $category->id?>"><?php echo $category->name?></option>
                        <?php endforeach;
                    } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>