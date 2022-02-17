<?php include_once "MVC/View/layout/nav.php" ?>

<a href="index.php?page=post-create" type="button" class="btn btn-success mb-2">CREATE POST</a>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">User</th>
        <th scope="col">Category</th>
        <th scope="col" class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post):?>
            <tr>
                <th scope="row"><?php echo $post->id?></th>
                <td style="padding: 5px"><img width="150px" src="<?php echo $post->image?>" alt="<?php echo $post->image?>"></td>
                <td><?php echo $post->title?></td>
                <td><?php echo $post->content?></td>
                <td><?php echo $post->userName?></td>
                <td><?php echo $post->categoryName?></td>
                <td class="text-center">
                    <a href="index.php?page=post-detail&id=<?php echo $post->id?>" type="button" class="btn btn-info">Show</a>
                    <a href="index.php?page=post-update&id=<?php echo $post->id?>" type="button" class="btn btn-success">Update</a>
                    <a href="index.php?page=post-delete&id=<?php echo $post->id?>" type="button" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
    <?php else:?>
        <tr>
            <td colspan="3">Chưa có bài viết trên hệ thống</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>