<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ Request::is('/dashboard*') ? 'active' : '' }}">
      <a href="/dashboard"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
    <li class="{{ Request::is('/warga*') ? 'active' : '' }}">
      <a href="/warga"><i class="glyphicon glyphicon-user"></i><span>Warga</span></a>
    </li>
    <li class="{{ Request::is('/kartukeluarga*') ? 'active' : '' }}">
      <a href="/kartukeluarga"><i class="glyphicon glyphicon-list-alt"></i><span>Kartu Keluarga</span></a>
    </li>
    <li class="{{ Request::is('/mutasi*') ? 'active' : '' }}">
      <a href="/mutasi"><i class="glyphicon glyphicon-send"></i><span>Mutasi</span></a>
    </li>
    <li class="header">ADMINISTRATOR</li>
    <li class="{{ request()->is('/user')? 'active' : '' }}">
      <a href="/user"><i class="fa fa-user"></i> <span>User</span></a>
    </li>
  </ul>