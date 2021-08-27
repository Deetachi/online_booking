@extends('dashboard.dashboard_master')
@section('dashboard')

<div class="content-wrapper">
	  <div class="container-full">
<section class="content">

<!-- Header -->
<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Book Vehicle</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Manage Bookings</li>
								<li class="breadcrumb-item active" aria-current="page">Book Vehicle</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
           <!-- form start -->
           <form action="{{ url('/apply_vehicle_booking', $id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
             <div class="row">
               <div class="col-12">
    <div class="form-group row">
						<label class="col-form-label col-md-2">Driver Details</label>
					</div>
                    <div class="form-group row">
						<label class="col-form-label col-md-2">Name: {{ $driver_detail->name }}</label>
					</div>
                    <div class="form-group row">
						<label class="col-form-label col-md-2">Email: {{ $driver_detail->email }}</label>
					</div>
                    <div class="form-group row">
						<label class="col-form-label col-md-2">Contact No: {{ 17726013 }}</label>
					</div>
               <div class="form-group">
								<h5>Travel Option <span class="text-danger" >*</span></h5>
								<div class="controls" placeholder="Select Role">
									<select name="travel_option" id="select" required class="form-control" aria-invalid="false">
                                        <option value="" selected="" disabled="">Select Traveling Option</option>
										<option value="admin">Within Thimphu</option>
										<option value="ticl_user">Outside Thimphu</option>
									</select>
								</div>
               </div>
               <div class="form-group row">
						<label class="col-form-label col-md-2">From Date</label>
						<div class="col-md-10">
							<input class="form-control" type="datetime-local" name="from_date">
							</div>
					</div>
                    <div class="form-group row">
						<label class="col-form-label col-md-2">To Date</label>
						<div class="col-md-10">
							<input class="form-control" type="datetime-local" name="to_date">
							</div>
					</div>
               <div class="text-xs-right">
                   <input type="submit" value="Apply" class="btn btn-rounded btn-info" name="Apply"/>
               </div>
               </div>
           </form>
           <!-- form end -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->

</section>

	  </div>
  </div>
@endsection



