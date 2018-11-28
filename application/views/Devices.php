<?php
if ($mode == 'create') {
    $device_name = '';
    $device_ipaddr = '';
} else {
    $device_id = $device->device_id;
    $device_name = $device->device_name;
    $device_ipaddr = $device->device_ipaddr;
}
?>
<!-- begin #content -->
<div id="content" class="content" ng-controller="devicesCtrl">
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
        <div class="col-12 col-md-3 col-lg-3">
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
                    <form action="<?= site_url('device/save'); ?>" method="post">
                        <input type="hidden" id="device_id" name="device_id" value="<?= $device_id; ?>">
                        <div class="form-group">
                            <label for="device_name">Hostname</label>
                            <input type="text" class="form-control" id="device_name" name="device_name"
                                   placeholder="Type a hostname" value="<?= $device_name; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="device_ipaddr">IP Address</label>
                            <input type="text" class="form-control" id="device_ipaddr" name="device_ipaddr"
                                   placeholder="Type an IP Address" value="<?= $device_ipaddr; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="brands">Brand</label>
                            <select id="brands" name="brands[]" class="multiple-select2 form-control"
                                    multiple="multiple" data-placeholder="Select a brands">
                                <?php if ($brands != NULL): ?>
                                    <?php foreach ($brands as $brand): ?>
                                        <option value="<?= $brand->brand_id; ?>" <?= isset($brand->selected) ? $brand->selected : ''; ?>><?= $brand->brand_name; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="types">Type</label>
                            <select id="types" name="types[]" class="multiple-select2 form-control"
                                    multiple="multiple" data-placeholder="Select a types">
                                <?php if ($types != NULL): ?>
                                    <?php foreach ($types as $type): ?>
                                        <option value="<?= $type->type_id; ?>" <?= isset($type->selected) ? $type->selected : ''; ?>><?= $type->type_name; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="locations">Locations</label>
                            <select id="locations" name="locations[]" class="multiple-select2 form-control"
                                    multiple="multiple" data-placeholder="Select a locations">
                                <?php if ($locations != NULL): ?>
                                    <?php foreach ($locations as $location): ?>
                                        <option value="<?= $location->location_id; ?>" <?= isset($location->selected) ? $location->selected : ''; ?>><?= $location->location_name; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <select id="tags" name="tags[]" class="multiple-select2 form-control"
                                    multiple="multiple" data-placeholder="Select a tags">
                                <?php if ($tags != NULL): ?>
                                    <?php foreach ($tags as $tag): ?>
                                        <option value="<?= $tag->tag_id; ?>" <?= isset($tag->selected) ? $tag->selected : ''; ?>><?= $tag->tag_name; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <?php if ($mode == 'edit'): ?>
                            <a href="<?= site_url('device'); ?>" class="btn btn-danger">Back</a>
                        <?php endif; ?>

                    </form>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->


        </div>

        <?php if ($mode == 'create'): ?>
            <div class="col-12 col-md-9 col-lg-9">
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
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th class="text-nowrap">Hostname</th>
                                <th class="text-nowrap">IP Address</th>
                                <th class="text-nowrap">Brand</th>
                                <th class="text-nowrap">Type</th>
                                <th class="text-nowrap">Locations</th>
                                <th class="text-nowrap">Tags</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="device in devices | filter : searching">
                                <td>{{ device.name }}</td>
                                <td>{{ device.ipaddress }}</td>
                                <td>
                                    <div ng-repeat="brand in device.brands">
                                        <span class="label label-dark mb-2">{{ brand.name }}</span>
                                        <br>
                                    </div>

                                </td>
                                <td>
                                    <div ng-repeat="type in device.types">
                                        <span class="label label-dark mb-2">{{ type.name }}</span>
                                        <br>
                                    </div>
                                </td>
                                <td>
                                    <div ng-repeat="location in device.locations">
                                        <span class="label label-dark mb-2">{{ location.name }}</span>
                                        <br>
                                    </div>
                                </td>
                                <td>
                                    <div ng-repeat="tag in device.tags">
                                        <span class="label label-dark mb-2">{{ tag.name }}</span>
                                    </div>
                                </td>
                                <td><a class="btn btn-xs btn-primary"
                                       href="{{ device.device_edit }}">Edit</a>
                                    <a class="btn btn-xs btn-danger"
                                       href="{{ device.device_delete }}">Delete</a>
                                </td>
                            </tr>
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