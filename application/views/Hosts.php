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

    <!-- Modal -->
    <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="filterLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="filterLabel">Filter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="eventLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventLabel">Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>

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
            <div class="row mb-2">
                <div class="col">
                    <a href="" class="btn btn-sm btn-primary"><i class="fas fa-play-circle"></i> Start Monitoring</a>
                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-stop-circle"></i> Stop Monitoring</a>


                </div>
                <div class="col">
                    <button type="button" onclick="filter($(this))" data-url="<?= site_url('hosts/filter'); ?>"
                            data-toggle="modal" data-target="#filter" class="btn btn-sm btn-info pull-right"><i
                                class="fas fa-filter"></i> Filter
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table id="#data-table-default" class="table">
                        <thead>
                        <tr>
                            <th width="5%"></th>
                            <th class="text-nowrap">Hostname</th>
                            <th class="text-nowrap">IP Address</th>
                            <th class="text-nowrap">Brand</th>
                            <th class="text-nowrap">Type</th>
                            <th class="text-nowrap">Locations</th>
                            <th class="text-nowrap">Tags</th>
                            <th class="text-nowrap">TTL</th>
                            <th class="text-nowrap">Event</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php if ($devices != NULL): ?>
                            <?php foreach ($devices as $device) : ?>
                                <tr>
                                    <td>
                                        <?php if ($device->device_setting->device_running == 0): ?>
                                            <a href="<?= site_url('hosts/start/' . $device->device_id); ?>"
                                               class="btn btn-xs btn-primary"><i class="fas fa-play-circle"></i>
                                                Start</a>
                                        <?php else: ?>
                                            <a href="<?= site_url('hosts/stop/' . $device->device_id); ?>"
                                               class="btn btn-xs btn-danger"><i class="fas fa-pause-circle"></i>
                                                Pause</a>
                                        <?php endif; ?>
                                    </td>
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
                                    <td>test</td>
                                    <td>
                                        <button class="btn btn-xs btn-info" onclick="show_event($(this))" type="button"
                                                data-url="<?= site_url('hosts/show_event/' . $device->device_id); ?>"
                                                data-toggle="modal" data-target="#event">Show
                                        </button>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end panel-body -->
    </div>
    <!-- end panel -->

</div>
<!-- end #content -->
<script>
    function filter(data) {
        var d = data,
            url = d.data('url'),
            modal = $('#filter'),
            modalbody = modal.find('.modal-body');

        modalbody.load(url);
    }

    function show_event(data) {
        var d = data,
            url = d.data('url'),
            modal = $('#event'),
            modalbody = modal.find('.modal-body');

        modalbody.load(url);
    }
</script>