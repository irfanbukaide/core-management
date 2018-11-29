<?php
if ($mode == 'create') {
    $vlan_name = '';
    $vlan_bandwidth = '';
    $vlan_speedtype = '';
} else {
    $vlan_id = $vlan->vlan_id;
    $vlan_name = $vlan->vlan_name;
    $vlan_bandwidth = $vlan->vlan_bandwidth;
    $vlan_speedtype = $vlan->vlan_speedtype;
}
?>
<!-- begin #content -->
<div id="content" class="content" ng-controller="vlansCtrl">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item active">Vlans</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Vlans
        <small>Link Management</small>
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
                    <h4 class="panel-title"><?= ucfirst($mode); ?> Vlan</h4>
                </div>
                <!-- end panel-heading -->

                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="<?= site_url('vlan/save'); ?>" method="post">
                        <input type="hidden" id="vlan_id" name="vlan_id" value="<?= $vlan_id; ?>">
                        <div class="form-group">
                            <label for="vlan_name">Vlan ID</label>
                            <input type="text" class="form-control" id="vlan_name" name="vlan_name"
                                   placeholder="Type a vlan" value="<?= $vlan_name; ?>" required autofocus>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="vlan_bandwidth">Bandwidth</label>
                                <input type="text" class="form-control" id="vlan_bandwidth" name="vlan_bandwidth"
                                       placeholder="Type a bandwidth" value="<?= $vlan_bandwidth; ?>" required
                                       autofocus>
                            </div>
                            <div class="col form-group">
                                <label for="vlan_speedtype">Speed Type</label>
                                <select name="vlan_speedtype" id="vlan_speedtype" class="form-control">
                                    <option value="Kbps">Kbps</option>
                                    <option value="Mbps">Mbps</option>
                                    <option value="Gbps">Gbps</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vendors">Vendor</label>
                            <select id="vendors" name="vendors[]" class="multiple-select2 form-control"
                                    multiple="multiple" data-placeholder="Select a vendors">
                                <?php if ($vendors != NULL): ?>
                                    <?php foreach ($vendors as $vendor): ?>
                                        <option value="<?= $vendor->vendor_id; ?>" <?= isset($vendor->selected) ? $vendor->selected : ''; ?>><?= $vendor->vendor_name; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="locations">Location</label>
                            <select id="locations" name="locations[]" class="multiple-select2 form-control"
                                    multiple="multiple" data-placeholder="Select a locations">
                                <?php if ($locations != NULL): ?>
                                    <?php foreach ($locations as $location): ?>
                                        <option value="<?= $location->location_id; ?>" <?= isset($location->selected) ? $location->selected : ''; ?>><?= $location->location_name; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <?php if ($mode == 'edit'): ?>
                            <a href="<?= site_url('vlan'); ?>" class="btn btn-danger">Back</a>
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
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" ng-model="searching"
                                       placeholder="Search anything">
                            </div>
                            <div class="col">
                                <div ng-repeat="host in hosts">

                                </div>
                            </div>
                            <div class="col">
                                <button type="button" onclick="filter($(this))"
                                        data-url="<?= site_url('hosts/filter'); ?>"
                                        data-toggle="modal" data-target="#filter"
                                        class="btn btn-sm btn-info pull-right mr-2"><i
                                            class="fas fa-filter"></i> Filter
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-nowrap">Vlan ID</th>
                                        <th class="text-nowrap">Bandwidth</th>
                                        <th class="text-nowrap">Vendor</th>
                                        <th class="text-nowrap">Location</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr ng-repeat="vlan in vlans | filter:searching | orderBy:'-name'">
                                        <td>{{ vlan.name }}</td>
                                        <td>{{ vlan.bandwidth + ' ' + vlan.speedtype }}</td>
                                        <td>
                                            <span ng-repeat="vendor in vlan.vendors" class="label label-dark mb-2 mr-2">{{ vendor.name }}</span>
                                        </td>
                                        <td>
                                            <span ng-repeat="location in vlan.locations"
                                                  class="label label-dark mb-2 mr-2">{{ location.name }}</span>
                                        </td>
                                        <td><a class="btn btn-xs btn-primary"
                                               href="{{ vlan.vlan_edit }}">Edit</a>
                                            <a class="btn btn-xs btn-danger"
                                               href="{{ vlan.vlan_delete }}">Delete</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end panel-body -->
                </div>
                <!-- end panel -->
            </div>
        <?php endif; ?>
    </div>

</div>
<!-- end #content -->