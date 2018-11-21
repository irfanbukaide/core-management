<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item active">Hosts</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Hosts
        <small>Monitoring Hosts</small>
    </h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                   data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            </div>
            <h4 class="panel-title">Hosts Filter</h4>
        </div>
        <!-- end panel-heading -->

        <!-- begin panel-body -->
        <div class="panel-body">
            <form class="form-horizontal col-12 col-md-10" method="get">
                <div class="row">
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label for="ipaddress" class="col-3 col-form-label">IP Address</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="ipaddress" name="ipaddress"
                                       placeholder="Type a ip address">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label for="hostname" class="col-3 col-form-label">Hostname</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="hostname" name="hostname"
                                       placeholder="Type a hostname">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label for="brand" class="col-3 col-form-label">Brand</label>
                            <div class="col-9">
                                <select id="brand" name="brand" class="default-select2 form-control">
                                    <option value="">Select a brand</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label for="type" class="col-3 col-form-label">Type</label>
                            <div class="col-9">
                                <select id="type" name="type" class="default-select2 form-control">
                                    <option value="">Select a type</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label for="location" class="col-3 col-form-label">Location</label>
                            <div class="col-9">
                                <select id="location" name="location" class="default-select2 form-control">
                                    <option value="">Select a location</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label for="tags" class="col-3 col-form-label">Tags</label>
                            <div class="col-9">
                                <select id="tags" name="tags" class="multiple-select2 form-control" multiple="multiple"
                                        data-placeholder="Select a tags">
                                    <option value="">Select a tags</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label for="status" class="col-3 col-form-label">Status</label>
                            <div class="col-9">
                                <select id="status" name="status" class="form-control">
                                    <option value="">Select a status</option>
                                    <option value="1">UP</option>
                                    <option value="0">DOWN</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Last Up</label>
                            <div class="col-9">
                                <div class="input-group input-daterange">
                                    <input type="text" class="form-control" name="start_lastup"
                                           placeholder="Date Start"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control" name="end_lastup" placeholder="Date End"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Last Down</label>
                            <div class="col-9">
                                <div class="input-group input-daterange">
                                    <input type="text" class="form-control" name="start_lastdown"
                                           placeholder="Date Start"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control" name="end_lastdown" placeholder="Date End"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>


            </form>
        </div>
        <!-- end panel-body -->
    </div>
    <!-- end panel -->

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
                    <th class="text-nowrap">Location</th>
                    <th class="text-nowrap">Tags</th>
                    <th class="text-nowrap">Status</th>
                    <th class="text-nowrap">Uptime</th>
                    <th class="text-nowrap">Downtime</th>
                    <th class="text-nowrap">Last Up</th>
                    <th class="text-nowrap">Last Down</th>
                    <th class="text-nowrap">Last Checked</th>
                    <th class="text-nowrap">Next Run</th>

                </tr>
                </thead>
                <tbody>
                <?php for ($i = 1; $i < 100; $i++) : ?>
                    <tr>
                        <td><?= $randIP = "" . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255); ?></td>
                        <td>PEER-Cengkareng-P</td>
                        <td>Cisco</td>
                        <td>Router</td>
                        <td>Jababeka</td>
                        <td>nms,monitoring listrik</td>
                        <td class="text-success">UP</td>
                        <td>194Days 39Minutes</td>
                        <td class="text-danger">194Days 39Minutes</td>
                        <td><?= date('d-m-Y H:i:s'); ?></td>
                        <td class="text-danger"><?= date('d-m-Y H:i:s'); ?></td>
                        <td><?= date('d-m-Y H:i:s'); ?></td>
                        <td><?= date('d-m-Y H:i:s'); ?></td>

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