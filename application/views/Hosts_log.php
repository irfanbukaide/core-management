<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?= site_url('hosts'); ?>">Hosts</a></li>
        <li class="breadcrumb-item active">Host Log</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Host Log
        <small>Monitoring</small>
    </h1>
    <!-- end page-header -->

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
            <h4 class="panel-title">Log History</h4>
        </div>
        <!-- end panel-heading -->

        <!-- begin panel-body -->
        <div class="panel-body">
            <table id="data-table-responsive" class="table">
                <thead>
                <tr>
                    <th class="text-nowrap">Datetime</th>
                    <th class="text-nowrap">Hostname</th>
                    <th class="text-nowrap">IP Address</th>
                    <th class="text-nowrap">Status</th>
                    <th class="text-nowrap"></th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 1; $i < 100; $i++) : ?>
                    <?php $v = 2; ?>
                    <tr class="<?= $hasil = $i % $v == 0 ? '' : ''; ?>">
                        <td><?= date('d/m/Y H:i:s'); ?></td>
                        <td>PEER-Cengkareng-P</td>
                        <td><?= $randIP = "" . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255); ?></td>

                        <td class="<?= $hasil = $i % $v == 0 ? 'text-danger' : 'text-success'; ?>"><?= $hasil = $i % $v == 0 ? 'DOWN' : 'UP'; ?></td>
                        <td>
                            <a href="#" class="btn btn-xs btn-success">Acknowledge</a>
                        </td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
        <!-- end panel-body -->
    </div>
    <!-- end panel -->

</div>
<!-- end #content -->