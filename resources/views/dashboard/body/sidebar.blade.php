<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
						  <img src="{{ asset('backend/images/logo_tcell.png')}}" alt="" class="w-80 h-50">
						  <a href="{{ route('dashboard.index')}}"><h3><b>Online Booking System</b></h3></a>
					 </div>
				</a>
			</div>
        </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">

		<li>
          <a href="{{ route('dashboard.index')}}">
            <i data-feather="home"></i>
			<span>Dashboard</span>
          </a>
        </li>
        @if(Auth::user()['role']['name'] == 'super_admin')
        <li class="treeview">
          <a href="#">
            <i data-feather="user"></i>
            <span>Manage Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('view_user')}}"><i class="ti-more"></i>View Users</a></li>
            <li><a href="{{ route('invitation')}}"><i class="ti-more"></i>Add Users</a></li>
          </ul>
        </li>
        @endif
        <li class="treeview">
          <a href="#">
            <i data-feather="file"></i>
            <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('edit_user', Auth::user()['id'])}}"><i class="ti-more"></i>Profile</a></li>
            <li><a href="{{ route('faqs')}}"><i class="ti-more"></i>FAQs</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap">Manage Vehicles and Halls</li>

		<li class="treeview">
          <a href="#">
          <i class="mr-0 font-size-50 mdi mdi-car"></i>
            <span>Vehicles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="{{ route('view_vehicles')}}"><i class="ti-more"></i>View Vehicles</a></li>
            @unless(Auth::user()['role']['name'] == 'ticl_user')
			<li><a href="{{ route('add_vehicle')}}"><i class="ti-more"></i>Add Vehicle</a></li>
            @endunless
		  </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Halls</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('view_halls')}}"><i class="ti-more"></i>View Halls</a></li>
            @unless(Auth::user()['role']['name'] == 'ticl_user')
            <li><a href="{{ route('add_hall')}}"><i class="ti-more"></i>Add Hall</a></li>
            @endunless
          </ul>
        </li>

    </ul>
    </section>

	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="https://mail.google.com/" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="{{ route('user.logout')}}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
