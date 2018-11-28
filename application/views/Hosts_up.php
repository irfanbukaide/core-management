<!-- begin #content -->
<div id="content" class="content" ng-controller="hostsUpCtrl">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?= site_url('hosts'); ?>">Hosts</a></li>
        <li class="breadcrumb-item active">Host Up</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Host Up
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
                    <h5 class="modal-title" id="eventLabel">Graph & Events</h5>
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
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" ng-model="searching" placeholder="Search anything">
                </div>
                <div class="col">
                    <div ng-repeat="host in hosts">

                    </div>
                </div>
                <div class="col">
                    <button type="button" onclick="filter($(this))" data-url="<?= site_url('hosts/filter'); ?>"
                            data-toggle="modal" data-target="#filter" class="btn btn-sm btn-info pull-right mr-2"><i
                                class="fas fa-filter"></i> Filter
                    </button>
                </div>
            </div>
            <div class="row">
                <table id="data-table-responsive" class="table">
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
                    <tr ng-repeat="host in hosts | filter : searching">
                        <td>
                            {{ host.name }}
                        </td>
                        <td>
                            {{ host.ipaddress }}
                        </td>
                        <td>
                            <span ng-repeat="brand in host.brands"
                                  class="label label-dark mb-2 mr-2">{{ brand.name }}</span><br>
                        </td>
                        <td>
                            <span ng-repeat="type in host.types"
                                  class="label label-dark mb-2 mr-2">{{ type.name }}</span><br>
                        </td>
                        <td>
                            <span ng-repeat="location in host.locations" class="label label-dark mb-2 mr-2">{{ location.name }}</span><br>
                        </td>
                        <td>
                            <span ng-repeat="tag in host.tags"
                                  class="label label-dark mb-2 mr-2">{{ tag.name }}</span><br>
                        </td>
                        <td>
                            <div ng-if="host.status == 1" class="text-success text-center"><i
                                        class="fas fa-check fa-sm"></i></div>
                            <div ng-if="host.status == 0" class="text-danger text-center"><i
                                        class="fas fa-times fa-sm"></i></div>
                        </td>
                        <td>
                            <button class="btn btn-xs btn-dark" onclick="show_event($(this))" type="button"
                                    data-url="{{ host.event_url }}"
                                    data-toggle="modal" data-target="#event">Graph & Events
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
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