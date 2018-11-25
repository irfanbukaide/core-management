<?php
if ($mode == 'create') {
    $location_name = '';
    $location_latitude = '';
    $location_longitude = '';
    $location_address = '';
} else {
    $location_id = $location->location_id;
    $location_name = $location->location_name;
    $location_latitude = $location->location_latitude;
    $location_longitude = $location->location_longitude;
    $location_address = $location->location_address;
}
?>

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?= site_url('master'); ?>">Master</a></li>
        <li class="breadcrumb-item active">Locations</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Locations
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
                    <h4 class="panel-title"><?= ucfirst($mode); ?> Location</h4>
                </div>
                <!-- end panel-heading -->

                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="<?= site_url('master/location/save'); ?>" method="post">
                        <input type="hidden" id="location_id" name="location_id" value="<?= $location_id; ?>">
                        <div class="form-group">
                            <label for="location_name">Location</label>
                            <input type="text" class="form-control" id="location_name" name="location_name"
                                   placeholder="Type a location" value="<?= $location_name; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="location_latitude">Latitude</label>
                            <input type="text" class="form-control" id="location_latitude" name="location_latitude"
                                   placeholder="Type a latitude" value="<?= $location_latitude; ?>">
                        </div>
                        <div class="form-group">
                            <label for="location_longitude">Longitude</label>
                            <input type="text" class="form-control" id="location_longitude" name="location_longitude"
                                   placeholder="Type a longitude" value="<?= $location_longitude; ?>">
                        </div>
                        <div class="form-group">
                            <label for="location_address">Address</label>
                            <textarea name="location_address" id="location_address" class="form-control" cols="30"
                                      maxlength="200" minlength="10"
                                      placeholder="Type an address"><?= $location_address; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <?php if ($mode == 'edit'): ?>
                            <a href="<?= site_url('master/location'); ?>" class="btn btn-danger">Back</a>
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
                        <table id="data-table-responsive" class="table">
                            <thead>
                            <tr>
                                <th class="text-nowrap">Location</th>
                                <th class="text-nowrap">Latitude, Longitude</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($locations != NULL): ?>
                                <?php foreach ($locations as $location) : ?>
                                    <tr>
                                        <td><?= $location->location_name; ?></td>
                                        <td><?= $location->location_latitude . ', ' . $location->location_longitude; ?></td>
                                        <td><a class="btn btn-xs btn-primary"
                                               href="<?= site_url('master/location/edit/' . $location->location_id); ?>">Edit</a>
                                            <a class="btn btn-xs btn-danger"
                                               href="<?= site_url('master/location/delete/' . $location->location_id); ?>">Delete</a>
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