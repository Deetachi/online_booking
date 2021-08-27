<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
      <!-- Sidebar toggle button-->
	  <div>
		  <ul class="nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button" data-original-title="Push Menu">
					<i class="nav-link-icon mdi mdi-menu"></i>
			    </a>
			</li>
			<li class="btn-group nav-item">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-original-title="Full Screen" data-toggle="tooltip">
					<i class="nav-link-icon mdi mdi-crop-free"></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="{{ route('calendar')}}" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-original-title="Calendar" data-toggle="tooltip">
					<i class="ti-calendar"></i>
			    </a>
			</li>
		  </ul>
	  </div>

      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- Search bar for full Screen -->
	      <li class="search-bar">
			  <div class="lookup lookup-circle lookup-right">
			     <input type="text" name="s">
			  </div>
		  </li>
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle" data-toggle="dropdown" data-original-title="Notifications">
			  <i class="ti-bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>
	      <!-- User Profile-->
          <li class="user user-menu">
			<a href="{{ route('edit_user', Auth::user()['id'])}}" class="waves-effect waves-light rounded dropdown-toggle p-0" data-original-title="Profile" data-toggle="tooltip">
				<img src="{{ asset('backend/images/avatar/avatar-1.png')}}" alt="" >
			</a>
          </li>
          <!-- User Logout-->
		  <li>
          <a href="{{ route('user.logout')}}" data-original-title="Logout" data-toggle="tooltip">
              <i class="glyphicon glyphicon-log-out text-muted mr-2"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
