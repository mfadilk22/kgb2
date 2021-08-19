<ul class="sidebar-menu" data-widget="tree">
<br>
<li class="header"> </li>

<li class="{{ request()->is('/') ? 'active' : '' }}">
    <a href="/">
        <i class="glyphicon glyphicon-home"></i> <span>Beranda</span>
    </a>    
</li>
<li class="{{ request()->is('datakgb') ? 'active' : '' }}">
    <a href="/datakgb">
        <i class="glyphicon glyphicon-th-list"></i> <span>Data KGB</span>
    </a>
</li>
<li class="{{ request()->is('pemberitahuankgb') ? 'active' : '' }}">
    <a href="/pemberitahuankgb">
        <i class="fa fa-envelope"></i> <span>Pemberitahuan KGB</span>
    </a>
</li>
<li class="skin-red"><a href="#"><i class="fa fa-remove"></i> Keluar</a></li>
</ul>