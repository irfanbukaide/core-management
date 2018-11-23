<!-- begin #header -->
<div id="header" class="header navbar-default">
    <!-- begin navbar-header -->
    <div class="navbar-header">
        <a href="<?= site_url(); ?>" class="navbar-brand"><span class="navbar-logo"></span>
            <b><?php echo $webname; ?></b></a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <button type="button" class="navbar-toggle p-0 m-r-0" data-toggle="collapse" data-target="#top-navbar">
					<span class="fa-stack fa-lg text-inverse m-t-2">
						<i class="far fa-square fa-stack-2x"></i>
						<i class="fa fa-cog fa-stack-1x"></i>
					</span>
        </button>
    </div>
    <!-- end navbar-header -->
    <!-- begin navbar-collapse -->
    <div class="collapse navbar-collapse pull-left" id="top-navbar">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-heartbeat fa-fw"></i>
                    <span>Hosts</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="<?= site_url('hosts'); ?>">
                            Host
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('hosts/host_up'); ?>">
                            <span class="badge badge-success pull-right">10</span>
                            Host Up
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('hosts/host_down'); ?>">
                            <span class="badge badge-danger pull-right">10</span>
                            Host Down
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('hosts/host_log'); ?>">
                            <span class="badge badge-danger pull-right">120</span>
                            Host Log
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="javascript:;"><i class="fa fa-share-alt fa-fw"></i> Vlan </a></li>
            <li><a href="<?= site_url('device'); ?>"><i class="fas fa-desktop fa-fw"></i> Device </a></li>
            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-database fa-fw"></i> Master <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?= site_url('master/brand'); ?>"><i class="fas fa-laptop fa-fw"></i> Brands</a></li>
                    <li><a href="<?= site_url('master/type'); ?>"><i class="fas fa-object-group fa-fw"></i> Types</a>
                    </li>
                    <li><a href="<?= site_url('master/location'); ?>"><i class="fas fa-building fa-fw"></i>
                            Locations</a></li>
                    <li><a href="<?= site_url('master/tag'); ?>"><i class="fas fa-tags fa-fw"></i> Tags</a></li>
                    <li><a href="<?= site_url('master/user'); ?>"><i class="fas fa-users fa-fw"></i> Users</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- end navbar-collapse -->

    <!-- begin header-nav -->
    <ul class="navbar-nav navbar-right">

        <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('color-admin/assets/img/user/user-13.jpg'); ?>" alt=""/>
                <span class="d-none d-md-inline"><?= $_SESSION['user_name'] . ' (' . $_SESSION['user_email'] . ')'; ?></span>
                <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Setting</a>
            </div>
        </li>
        <li><a href="<?= site_url('logout'); ?>" class="dropdown-item">Sign out</a></li>
    </ul>
    <!-- end header navigation right -->
</div>
<!-- end #header -