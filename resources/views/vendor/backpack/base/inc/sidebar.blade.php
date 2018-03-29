@if (Auth::check())
  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
      {{-- <li>{{ trans('backpack::base.administration') }}</li> --}}
      <!-- ================================================ -->
        <!-- ==== Recommended place for admin menu items ==== -->
        <!-- ================================================ -->
        <li>
          <a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> {{ trans('backpack::base.dashboard') }}</a>
        </li>
        <li>
          <a href="{{ backpack_url('page') }}"><i class="fa fa-file-text-o"></i> {{ trans('page.page') }}</a>
        </li>
        <!-- Users, Roles Permissions -->
        <li>
          <a><i class="fa fa-desktop"></i> Users <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu" style="display: none">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
          </ul>
        </li>
        <!-- ======================================= -->
        {{-- <li>Other menus</li> --}}
      </ul>
    </div>

  </div>
  <!-- /sidebar menu -->
@endif
