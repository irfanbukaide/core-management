<?php
if ($mode == 'create') {
    $type_name = '';
} else {
    $type_id = $type->type_id;
    $type_name = $type->type_name;
}
?>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?= site_url('master'); ?>">Master</a></li>
        <li class="breadcrumb-item active">Types</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Types
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
                    <h4 class="panel-title"><?= ucfirst($mode); ?> Type</h4>
                </div>
                <!-- end panel-heading -->

                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="<?= site_url('master/type/save'); ?>" method="post">
                        <input type="hidden" id="type_id" name="type_id" value="<?= $type_id; ?>">
                        <div class="form-group">
                            <label for="type_name">Type Name</label>
                            <input type="text" class="form-control" id="type_name" name="type_name"
                                   placeholder="Type a type" value="<?= $type_name; ?>" required autofocus>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <?php if ($mode == 'edit'): ?>
                            <a href="<?= site_url('master/type'); ?>" class="btn btn-danger">Back</a>
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
                        <table id="data-table-responsive" class="table table-sm table-hover">
                            <thead>
                            <tr>
                                <th class="text-nowrap">Type Name</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($types != NULL): ?>
                                <?php foreach ($types as $type) : ?>
                                    <tr>
                                        <td><?= $type->type_name; ?></td>
                                        <td><a class="btn btn-xs btn-primary"
                                               href="<?= site_url('master/type/edit/' . $type->type_id); ?>">Edit</a>
                                            <a class="btn btn-xs btn-danger"
                                               href="<?= site_url('master/type/delete/' . $type->type_id); ?>">Delete</a>
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