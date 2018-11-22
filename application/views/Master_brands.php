<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?= site_url('master'); ?>">Master</a></li>
        <li class="breadcrumb-item active">Brands</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Brands
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
                    <h4 class="panel-title">Input Brand</h4>
                </div>
                <!-- end panel-heading -->

                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="<?= site_url('master/brand/save'); ?>" method="post">
                        <input type="hidden" id="brand_id" name="brand_id">
                        <div class="form-group">
                            <label for="brand_name">Brand Name</label>
                            <input type="text" class="form-control" id="brand_name" name="brand_name"
                                   placeholder="Type a brand">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>


                    </form>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->


        </div>

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
                            <th class="text-nowrap">Brand Name</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for ($i = 1; $i < 100; $i++) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td>Cisco</td>
                                <td><a class="btn btn-xs btn-danger"
                                       href="<?= site_url('master/brand/delete/' . $i); ?>">Delete</a></td>

                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
    </div>

</div>
<!-- end #content -->