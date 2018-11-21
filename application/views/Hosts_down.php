<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item">Hosts</li>
        <li class="breadcrumb-item active">Down</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Hosts Down
        <small>Monitoring Hosts</small>
    </h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <div class="col">
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
                    <h4 class="panel-title">Hosts</h4>
                </div>
                <!-- end panel-heading -->

                <!-- begin panel-body -->
                <div class="panel-body">
                    <table id="data-table-responsive" class="table table-sm table-hover">
                        <thead>
                        <tr>
                            <th class="text-nowrap">IP Address</th>
                            <th class="text-nowrap">Hosts Name</th>
                            <th class="text-nowrap">Brand</th>
                            <th class="text-nowrap">Type</th>
                            <th class="text-nowrap">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for ($i = 1; $i < 100; $i++) : ?>
                            <tr>
                                <td><?= $randIP = "" . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255); ?></td>
                                <td>PEER-Cengkareng-P</td>
                                <td>Cisco</td>
                                <td>Router</td>
                                <td class="text-success">UP</td>
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
    <!-- end row -->

</div>
<!-- end #content -->