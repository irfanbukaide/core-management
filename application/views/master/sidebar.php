<!-- begin #sidebar -->
<div id="top-menu" class="top-menu">
    <!-- begin sidebar nav -->
    <ul class="nav">
        <li class="has-sub <?= isset($hosts['root']) ? $hosts['root'] : ''; ?>">
            <a href="javascript:;">
                <b class="caret"></b>
                <i class="fa fa-th-large"></i>
                <span>Hosts</span>
            </a>
            <ul class="sub-menu">
                <li class="<?= isset($hosts['device']) ? $hosts['device'] : ''; ?>">
                    <a href="<?= site_url('hosts'); ?>">
                        Hosts
                    </a>
                </li>
                <li class="<?= isset($hosts['device_up']) ? $hosts['device_up'] : ''; ?>">
                    <a href="<?= site_url('hosts/device_up'); ?>">
                        <span class="badge badge-success pull-right">10</span>
                        Hosts Up
                    </a>
                </li>
                <li class="<?= isset($hosts['device_down']) ? $hosts['device_down'] : ''; ?>">
                    <a href="<?= site_url('hosts/device_down'); ?>">
                        <span class="badge badge-danger pull-right">10</span>
                        Hosts Down
                    </a>
                </li>
                <li class="<?= isset($hosts['device_log']) ? $hosts['device_log'] : ''; ?>">
                    <a href="<?= site_url('hosts/device_log'); ?>">
                        <span class="badge badge-danger pull-right">120</span>
                        Hosts Log
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- end sidebar nav -->
</div>
<!-- end #sidebar -->