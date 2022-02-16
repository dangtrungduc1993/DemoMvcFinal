<?php include_once "MVC/View/layout/nav.php" ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col" class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($users)): ?>
        <?php foreach ($users as $user):?>
            <tr>
                <th scope="row"><?php echo $user->id?></th>
                <td><?php echo $user->name?></td>
                <td><?php echo $user->email?></td>
                <td class="text-center">
                    <a href="index.php?page=user-detail&id=<?php echo $user->id?>" type="button" class="btn btn-info">Show</a>
                    <a href="index.php?page=user-update&id=<?php echo $user->id?>" type="button" class="btn btn-success">Update</a>
                    <a href="index.php?page=user-delete&id=<?php echo $user->id?>" type="button" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
    <?php else:?>
        <tr>
            <td colspan="3">Chưa có người dùng trên hệ thống</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>