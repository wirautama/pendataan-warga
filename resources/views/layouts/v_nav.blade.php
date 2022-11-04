<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is('/dashboard')? 'active' : '' }}"><a href="/dashboard"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
    <li class="{{ request()->is('/warga')? 'active' : '' }}"><a href="/warga"><i class="fa fa-dashboard"></i><span>Warga</span></a></li>
    <li class="{{ request()->is('/kartukeluarga')? 'active' : '' }}"><a href="/kartukeluarga"><i class="fa fa-dashboard"></i><span>Kartu Keluarga</span></a></li>
    <li class="{{ request()->is('/user')? 'active' : '' }}"><a href="/user"><i class="fa fa-user"></i> <span>User</span></a></li>
    <li class="{{ request()->is('/mutasi')? 'active' : '' }}"><a href="/mutasi"><i class="fa fa-users"></i> <span>Mutasi</span></a></li>
    
  </ul>