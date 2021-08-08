<ul class="sidebar-menu" data-widget="tree">
<br>
<li class="header"> </li>
<li class="{{ request()->is('/') ? 'active' : '' }}">
    <a href="/">
        <i class="fa fa-dashboard"></i> <span>Beranda</span>
    </a>    
</li>
<li class="{{ request()->is('datakgb') ? 'active' : '' }}">
    <a href="/datakgb">
        <i class="fa fa-calendar"></i> <span>Data KGB</span>
    </a>
</li>
<li class="{{ request()->is('pemberitahuankgb') ? 'active' : '' }}">
    <a href="/pemberitahuankgb">
        <i class="fa fa-envelope"></i> <span>Pemberitahuan KGB</span>
    </a>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-share"></i> <span>Multilevel</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
    </ul>
</li>
<li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>

</ul>