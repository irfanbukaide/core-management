<?php
if ($mode == 'create') {
    $user_id = '';
    $user_name = '';
    $user_email = '';
    $user_password = '';
} else {
    $user_id = $user->user_id;
    $user_name = $user->user_name;
    $user_email = $user->user_email;
    $user_password = $user->user_password;
}
?>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?= site_url('master'); ?>">Master</a></li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Users
        <small>Master</small>
    </h1>
    <!-- end page-header -->

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                           data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title"><?= ucfirst($mode); ?> User</h4>
                </div>
                <!-- end panel-heading -->

                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="<?= site_url('master/user/save'); ?>" method="post">
                        <input type="hidden" id="user_id" name="user_id" value="<?= $user_id; ?>">
                        <div class="form-group">
                            <label for="user_name">User Name</label>
                            <input type="text" class="form-control" id="user_name" name="user_name"
                                   placeholder="Type a user" value="<?= $user_name; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="user_email">User E-mail</label>
                            <input type="email" class="form-control" id="user_email" name="user_email"
                                   placeholder="Type a email" value="<?= $user_email; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="user_password">User Password</label>
                            <input type="password" class="form-control" id="user_password" name="user_password"
                                   placeholder="Type a password" value="<?= $user_password; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>

                        <?php if ($mode == 'edit'): ?>
                            <a href="<?= site_url('master/user'); ?>" class="btn btn-danger">Back</a>
                        <?php endif; ?>

                    </form>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->


        </div>

        <?php if ($mode == 'create'): ?>
            <div class="col-12 col-md-8 col-lg-8">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <!-- begin panel-heading -->
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                        <h4 class="panel-title">List</h4>
                    </div>
                    <!-- end panel-heading -->

                    <!-- begin panel-body -->
                    <div class="panel-body">
                        <table id="data-table-responsive" class="table table-sm">
                            <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th class="text-nowrap">User Name</th>
                                <th class="text-nowrap">User Email</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($users != NULL): ?>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td><?= $user->user_id; ?></td>
                                        <td><?= $user->user_name; ?></td>
                                        <td><?= $user->user_email; ?></td>
                                        <td><a class="btn btn-xs btn-info"
                                               href="<?= site_url('master/user/upload/' . $user->user_id); ?>">Upload</a>
                                            <a class="btn btn-xs btn-primary"
                                               href="<?= site_url('master/user/edit/' . $user->user_id); ?>">Edit</a>
                                            <?php if ($user->user_name != 'admin'): ?>
                                                <a class="btn btn-xs btn-danger"
                                                   href="<?= site_url('master/user/delete/' . $user->user_id); ?>">Delete</a>
                                            <?php endif; ?>

                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- end panel-body -->
                </div>
                <!-- end panel -->
            </div>
        <?php endif; ?>
    </div>

</div>
<!-- end #content -->