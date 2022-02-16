<?php include_once "MVC/View/layout/nav.php" ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col" class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($categories)): ?>
        <?php foreach ($categories as $category):?>
            <tr>
                <th scope="row"><?php echo $category->id?></th>
                <td><?php echo $category->name?></td>
                <td class="text-center">
                    <a href="index.php?page=category-detail&id=<?php echo $category->id?>" type="button" class="btn btn-info">Show</a>
                    <a href="index.php?page=category-update&id=<?php echo $category->id?>" type="button" class="btn btn-success">Update</a>
                    <a href="index.php?page=category-delete&id=<?php echo $category->id?>" type="button" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
    <?php else:?>
        <tr>
            <td colspan="3">Chưa có chuyên mục trên hệ thống</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>