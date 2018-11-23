<?php
if ($mode == 'create') {
    $device_id = '';
    $device_name = '';
} else {
    $device_id = $device->device_id;
    $device_name = $device->device_name;
}
?>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item active">Devices</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Devices
        <small>Hardware Management</small>
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
                    <h4 class="panel-title"><?= ucfirst($mode); ?> Device</h4>
                </div>
                <!-- end panel-heading -->

                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="<?= site_url('master/device/save'); ?>" method="post">
                        <input type="hidden" id="device_id" name="device_id" value="<?= $device_id; ?>">
                        <div class="form-group">
                            <label for="device_name">Device Name</label>
                            <input type="text" class="form-control" id="device_name" name="device_name"
                                   placeholder="Type a device" value="<?= $device_name; ?>" required autofocus>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <?php if ($mode == 'edit'): ?>
                            <a href="<?= site_url('master/device'); ?>" class="btn btn-danger">Back</a>
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
                                <th width="10%">ID</th>
                                <th class="text-nowrap">Device Name</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($devices != NULL): ?>
                                <?php foreach ($devices as $device) : ?>
                                    <tr>
                                        <td><?= $device->device_id; ?></td>
                                        <td><?= $device->device_name; ?></td>
                                        <td><a class="btn btn-xs btn-primary"
                                               href="<?= site_url('master/device/edit/' . $device->device_id); ?>">Edit</a>
                                            <a class="btn btn-xs btn-danger"
                                               href="<?= site_url('master/device/delete/' . $device->device_id); ?>">Delete</a>
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