<!-- begin #sidebar -->
<div id="top-menu" class="top-menu">
    <!-- begin sidebar nav -->
    <ul class="nav">
        <li class="has-sub <?= isset($hosts['root']) ? $hosts['root'] : ''; ?>">
            <a href="javascript:;">
                <b class="caret"></b>
                <i class="fas fa-heartbeat"></i>
                <span>Hosts</span>
            </a>
            <ul class="sub-menu">
                <li class="<?= isset($hosts['host']) ? $hosts['host'] : ''; ?>">
                    <a href="<?= site_url('hosts'); ?>">
                        Hosts
                    </a>
                </li>
                <li class="<?= isset($hosts['host_up']) ? $hosts['host_up'] : ''; ?>">
                    <a href="<?= site_url('hosts/host_up'); ?>">
                        <span class="badge badge-success pull-right">10</span>
                        Hosts Up
                    </a>
                </li>
                <li class="<?= isset($hosts['host_down']) ? $hosts['host_down'] : ''; ?>">
                    <a href="<?= site_url('hosts/host_down'); ?>">
                        <span class="badge badge-danger pull-right">10</span>
                        Hosts Down
                    </a>
                </li>
                <li class="<?= isset($hosts['host_log']) ? $hosts['host_log'] : ''; ?>">
                    <a href="<?= site_url('hosts/host_log'); ?>">
                        <span class="badge badge-danger pull-right">120</span>
                        Hosts Log
                    </a>
                </li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret"></b>
                <i class="fas fa-desktop"></i>
                <span>Device</span>
            </a>
            <ul class="sub-menu">
                <li><a href="">Add Device</a></li>
                <li><a href="">List</a></li>
            </ul>
        </li>
    </ul>
    <!-- end sidebar nav -->
</div>
<!-- end #sidebar -->