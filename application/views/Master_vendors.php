<?php
if ($mode == 'create') {
    $vendor_name = '';
} else {
    $vendor_id = $vendor->vendor_id;
    $vendor_name = $vendor->vendor_name;
}
?>
<!-- begin #content -->
<div id="content" class="content" ng-controller="vendorsCtrl">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?= site_url('master'); ?>">Master</a></li>
        <li class="breadcrumb-item active">Vendors</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Vendors
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
                    <h4 class="panel-title"><?= ucfirst($mode); ?> Vendor</h4>
                </div>
                <!-- end panel-heading -->

                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="<?= site_url('master/vendor/save'); ?>" method="post">
                        <input type="hidden" id="vendor_id" name="vendor_id" value="<?= $vendor_id; ?>">
                        <div class="form-group">
                            <label for="vendor_name">Vendor Name</label>
                            <input type="text" class="form-control" id="vendor_name" name="vendor_name"
                                   placeholder="Type a vendor" value="<?= $vendor_name; ?>" required autofocus>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <?php if ($mode == 'edit'): ?>
                            <a href="<?= site_url('master/vendor'); ?>" class="btn btn-danger">Back</a>
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
                                        <th class="text-nowrap">Vendor Name</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr ng-repeat="vendor in vendors | filter:searching  | orderBy:'vendor.vendor_name'">
                                        <td>{{ vendor.vendor_name }}</td>
                                        <td>
                                            <a class="btn btn-xs btn-primary"
                                               href="{{ vendor.vendor_edit }}">Edit</a>
                                            <a class="btn btn-xs btn-danger"
                                               href="{{ vendor.vendor_delete }}">Delete</a>
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