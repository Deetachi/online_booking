@extends('dashboard.dashboard_master')
@section('dashboard')
<div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
            @if(Auth::user()['role']['name'] == 'super_admin')
				<div class="col-xl-4 col-6">
					<div class="box overflow-hidden pull-up align-items-center  ">
						<div class="box-body text-center ">
							<div class="icon bg-primary-light rounded w-60 h-60">
								<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16 ">Active Users</p>
								<h3 class="text-white mb-0 font-weight-500">100 </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-6">
					<div class="box overflow-hidden pull-up align-items-center">
						<div class="box-body text-center">
							<div class="icon bg-warning-light rounded w-60 h-60">
								<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Total Car Booking</p>
								<h3 class="text-white mb-0 font-weight-500">3400 </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-6">
					<div class="box overflow-hidden pull-up align-items-center">
						<div class="box-body text-center ">
							<div class="icon bg-info-light rounded w-60 h-60">
								<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Total Hall Booking</p>
								<h3 class="text-white mb-0 font-weight-500">5000 </h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-6 col-12">
					<div class="box bg-info bg-img" style="background-image: url(../images/gallery/bg-1.png)">
						<div class="box-body text-center">
							<img src="../images/trophy.png" class="mt-50" alt="" />
							<div class="max-w-500 mx-auto">
								<h2 class="text-white mb-20 font-weight-500">Conference Hall is Booked</h2>
								<p class="text-white-50 mb-10 font-size-20">No empty halls at the moment!</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">
									<div>
										<h2 class="text-white mb-0 font-weight-500">1.5k</h2>
										<p class="text-mute mb-0 font-size-20">Total users</p>
									</div>
								</div>
								<div class="box-body p-0">
									<div id="revenue1"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">
									<div>
										<h2 class="text-white mb-0 font-weight-500">35.8k</h2>
										<p class="text-mute mb-0 font-size-20">Average booking per day</p>
									</div>
								</div>
								<div class="box-body p-0">
									<div id="revenue2"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-5 col-xl-6 col-12">
					<div class="box overflow-hidden">
						<div class="box-body p-0">
							<div class="row no-gutters">
								<div class="col-md-6 col-12">
									<div class="box no-shadow mb-0 rounded-0">
										<div class="box-header no-border">
											<h4 class="box-title mb-0">
												Last Posts
											</h4>
										</div>
										<div class="box-body p-0">
											<div class="media-list media-list-hover">
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>Conference Hall booked by Management Information System Department</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>Car booked for outside Thimphu by Strategic Planning and Projects Department</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>25 new users added </h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>3 users edited</h5>
											  </div>
                                            </a>
										  </div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-12">
									<div class="box no-shadow mb-0 bg-img rounded-0" data-overlay="5" style="background-image: url(../images/gallery/landscape7.jpg)">
										<div class="box-header no-border">
											<h4 class="box-title mb-0">
												<span class="avatar avatar-lg bg-success">DS</span>
											</h4>
											<ul class="box-controls">
												<li><a href="javascript:void(0)"><i class="ti-reload text-white"></i></a></li>
											</ul>
										</div>
										<div class="box-body">
											<div class="text-right mt-100 pt-20">
												<h3 class="text-white"><small class="mr-10"><i class="fa fa-commenting"></i></small> 3</h3>
												<h2 class="text-white"><small class="mr-10"><i class="fa fa-heart"></i></small> 23</h2>
												<h1 class="text-white"><small class="mr-10"><i class="fa fa-eye"></i></small> 189</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endif
				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title align-items-start flex-column">
								Vehicle Bookings
							</h4>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table class="table no-border">
									<thead>
										<tr class="text-uppercase bg-lightest">
											<th style="min-width: 150px"><span class="text-white">Name</span></th>
											<th style="min-width: 100px"><span class="text-fade">Number</span></th>
											<th style="min-width: 100px"><span class="text-fade">Driver Name</span></th>
											<th style="min-width: 150px"><span class="text-fade">Booked By</span></th>
											<th style="min-width: 130px"><span class="text-fade">Designation</span></th>
											<th style="min-width: 120px"><span class="text-fade">From Date</span></th>
                                            <th style="min-width: 120px"><span class="text-fade">To Date</span></th>
                                            <th style="min-width: 120px"><span class="text-fade">Contact No</span></th>
                                            <th style="min-width: 120px"><span class="text-fade">Department</span></th>
										</tr>
									</thead>
									<tbody>
                                        @foreach($vehicle_bookings as $vehicle_booking)
                                        <tr>
											<td>{{ App\Models\Vehicle::find($vehicle_booking->bookable_id)->name }} </td>
											<td>{{ App\Models\Vehicle::find($vehicle_booking->bookable_id)->number }} </td>
                                            <td>{{ App\Models\Vehicle::find($vehicle_booking->bookable_id)->user->name }} </td>
                                            <td>{{ App\Models\User::find($vehicle_booking->user_id)->name }} </td>
                                            <td>{{ App\Models\User::find($vehicle_booking->user_id)->designation }} </td>
                                            <td>{{ gmdate("Y-m-d\TH:i:s\Z", $vehicle_booking->from_timestamp) }} </td>
                                            <td>{{ gmdate("Y-m-d\TH:i:s\Z", $vehicle_booking->to_timestamp) }} </td>
                                            <td>{{ App\Models\User::find($vehicle_booking->user_id)->contactnumber }} </td>
                                            <td>{{ App\Models\User::find($vehicle_booking->user_id)->department }} </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

                <div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title align-items-start flex-column">
								Hall Bookings
							</h4>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table class="table no-border">
									<thead>
										<tr class="text-uppercase bg-lightest">
											<th style="min-width: 150px"><span class="text-white">Name</span></th>
											<th style="min-width: 100px"><span class="text-fade">Description</span></th>
											<th style="min-width: 100px"><span class="text-fade">Occupancy</span></th>
											<th style="min-width: 150px"><span class="text-fade">Booked By</span></th>
											<th style="min-width: 130px"><span class="text-fade">Designation</span></th>
											<th style="min-width: 120px"><span class="text-fade">From Date</span></th>
                                            <th style="min-width: 120px"><span class="text-fade">To Date</span></th>
                                            <th style="min-width: 120px"><span class="text-fade">Contact No</span></th>
                                            <th style="min-width: 120px"><span class="text-fade">Department</span></th>
										</tr>
									</thead>
									<tbody>
                                        @foreach($hall_bookings as $hall_booking)
                                        <tr>
											<td>{{ App\Models\Hall::find($hall_booking->bookable_id)->name }} </td>
											<td>{{ App\Models\Hall::find($hall_booking->bookable_id)->description }} </td>
                                            <td>{{ App\Models\Hall::find($hall_booking->bookable_id)->occupancy }} </td>
                                            <td>{{ App\Models\User::find($hall_booking->user_id)->name }} </td>
                                            <td>{{ App\Models\User::find($hall_booking->user_id)['designation'] }} </td>
                                            <td>{{ gmdate("Y-m-d\TH:i:s\Z", $hall_booking->from_timestamp) }} </td>
                                            <td>{{ gmdate("Y-m-d\TH:i:s\Z", $hall_booking->to_timestamp) }} </td>
                                            <td>{{ App\Models\User::find($hall_booking->user_id)['contactnumber'] }} </td>
                                            <td>{{ App\Models\User::find($hall_booking->user_id)['department'] }} </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
@endsection
