<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item">Hosts</li>
        <li class="breadcrumb-item active">Host</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Host
        <small>Monitoring</small>
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
                                       placeholder="Type an ip address">
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
                            <label for="brand" class="col-3 col-form-label">Brands</label>
                            <div class="col-9">
                                <select id="brand" name="brand[]" class="multiple-select2 form-control"
                                        multiple="multiple"
                                        data-placeholder="Select a brands">
                                    <?php if ($brands != NULL): ?>
                                        <?php foreach ($brands as $brand): ?>
                                            <option value="<?= $brand->brand_id; ?>"><?= $brand->brand_name; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label for="type" class="col-3 col-form-label">Types</label>
                            <div class="col-9">
                                <select id="type" name="type[]" class="multiple-select2 form-control"
                                        multiple="multiple"
                                        data-placeholder="Select a types">
                                    <?php if ($types != NULL): ?>
                                        <?php foreach ($types as $type): ?>
                                            <option value="<?= $type->type_id; ?>"><?= $type->type_name; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label for="location" class="col-3 col-form-label">Locations</label>
                            <div class="col-9">
                                <select id="location" name="location[]" class="multiple-select2 form-control"
                                        multiple="multiple"
                                        data-placeholder="Select a locations">
                                    <?php if ($locations != NULL): ?>
                                        <?php foreach ($locations as $location): ?>
                                            <option value="<?= $location->location_id; ?>"><?= $location->location_name; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xs-6 col-md-5 col-lg-4">
                        <div class="form-group row">
                            <label for="tags" class="col-3 col-form-label">Tags</label>
                            <div class="col-9">
                                <select id="tags" name="tags[]" class="multiple-select2 form-control"
                                        multiple="multiple"
                                        data-placeholder="Select a tags">
                                    <?php if ($tags != NULL): ?>
                                        <?php foreach ($tags as $tag): ?>
                                            <option value="<?= $tag->tag_id; ?>"><?= $tag->tag_name; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
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
                    <th class="text-nowrap">Hostname</th>
                    <th class="text-nowrap">IP Address</th>
                    <th class="text-nowrap">Brand</th>
                    <th class="text-nowrap">Type</th>
                    <th class="text-nowrap">Locations</th>
                    <th class="text-nowrap">Tags</th>
                    <th class="text-nowrap">Status</th>
                    <th class="text-nowrap">Event</th>

                </tr>
                </thead>
                <tbody>
                <?php if ($devices != NULL): ?>
                    <?php foreach ($devices as $device) : ?>
                        <tr>
                            <td><?= $device->device_name; ?></td>
                            <td><?= $device->device_ipaddr; ?></td>
                            <td>
                                <?php if (isset($device->device_brand) && $device->device_brand != NULL): ?>
                                    <?php foreach ($device->device_brand as $db): ?>
                                        <?php $brand = $this->brands->where('brand_id', $db->brand_id)->get(); ?>
                                        <span class="label label-dark mb-2"><?= $brand->brand_name; ?></span>
                                        <br>
                                        <div class="mb-2"></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (isset($device->device_type) && $device->device_type != NULL): ?>
                                    <?php foreach ($device->device_type as $db): ?>
                                        <?php $type = $this->types->where('type_id', $db->type_id)->get(); ?>
                                        <span class="label label-dark mb-2"><?= $type->type_name; ?></span>
                                        <br>
                                        <div class="mb-2"></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (isset($device->device_location) && $device->device_location != NULL): ?>
                                    <?php foreach ($device->device_location as $db): ?>
                                        <?php $location = $this->locations->where('location_id', $db->location_id)->get(); ?>
                                        <span class="label label-dark mb-2"><?= $location->location_name; ?></span>
                                        <br>
                                        <div class="mb-2"></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (isset($device->device_tag) && $device->device_tag != NULL): ?>
                                    <?php foreach ($device->device_tag as $db): ?>
                                        <?php $tag = $this->tags->where('tag_id', $db->tag_id)->get(); ?>
                                        <span class="label label-dark"><?= $tag->tag_name; ?></span>
                                        <br>
                                        <div class="mb-2"></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </td>
                            <td class="text-success">UP</td>
                            <td>
                                <div class="row">
                                    <div class="col mb-2">
                                        <b>Uptime :</b><br>
                                        <span class="text-success">15Days 45Minutes</span>
                                    </div>
                                    <div class="col mb-2">
                                        <b>Downtime :</b><br>
                                        <span class="text-danger">15Days 45Minutes</span>
                                    </div>
                                    <div class="col mb-2">
                                        <b>Last up at :</b> <br>
                                        <?= date('d-m-Y H:i:s'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-2">
                                        <b>Last down at :</b> <br>
                                        <?= date('d-m-Y H:i:s'); ?>
                                    </div>
                                    <div class="col mb-2">
                                        <b>Last checked at :</b><br>
                                        <?= date('d-m-Y H:i:s'); ?>
                                    </div>
                                    <div class="col mb-2">
                                        <b>Next run at :</b><br>
                                        <?= date('d-m-Y H:i:s'); ?>
                                    </div>
                                </div>
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
<!-- end #content -->