@extends('dashboard.dashboard_master')
@section('dashboard')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Calendar</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Extra</li>
								<li class="breadcrumb-item active" aria-current="page">Calendar</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">

			<div class="col-12">
				<div class="box">
					<div class="box-body">
						<div class="row">
							<div class="col-xl-9 col-lg-8 col-12">
								<div id="calendar"></div>
							</div>
							<div class="col-xl-3 col-lg-4 col-12">
								<div class="box no-border no-shadow">
									<div class="box-header with-border">
									  <h4 class="box-title">Draggable Events</h4>
									</div>
									<div class="box-body p-0">
									  <!-- the events -->
									  <div id="external-events">
										<div class="external-event m-15 bg-primary" data-class="bg-primary"><i class="fa fa-hand-o-right"></i>Within Thimphu Travel Start Date</div>
										<div class="external-event m-15 bg-warning" data-class="bg-warning"><i class="fa fa-hand-o-right"></i>Outside Thimphu Travel Start Date </div>
										<div class="external-event m-15 bg-info" data-class="bg-info"><i class="fa fa-hand-o-right"></i>Reached Back Home</div>
										<div class="external-event m-15 bg-success" data-class="bg-success"><i class="fa fa-hand-o-right"></i>Booked Hall</div>
										<div class="external-event m-15 bg-danger" data-class="bg-danger"><i class="fa fa-hand-o-right"></i>Sleep tight</div>
									  </div>
									  <div class="event-fc-bt mx-15 my-20">
										<!-- checkbox -->
										<div class="checkbox">
											<input id="drop-remove" type="checkbox">
											<label for="drop-remove">
												Remove after drop
											</label>
										</div>

									  </div>
								   </div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			  </div>

			</div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>

  </div>
  <!-- /.content-wrapper -->

<script src="{{ asset('backend/js/vendors.min.js')}}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('../assets/vendor_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('../assets/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.js')}}"></script>
	<script src="{{ asset('../assets/vendor_components/fullcalendar/lib/moment.min.js')}}"></script>
	<script src="{{ asset('../assets/vendor_components/fullcalendar/fullcalendar.min.js')}}"></script>
	<script src="{{ asset('backend/js/pages/calendar.js')}}"></script>

	<!-- Sunny Admin App -->
	<script src="{{ asset('backend/js/template.js')}}"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

@endsection
