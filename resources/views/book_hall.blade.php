@extends('dashboard.dashboard_master')
@section('dashboard')

<div class="content-wrapper">
	  <div class="container-full">
<section class="content">

<!-- Basic Forms -->
<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Book Hall</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Manage Bookings</li>
								<li class="breadcrumb-item active" aria-current="page">Book Book Hall</li>
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
           <form action="{{ url('/apply_hall_booking', $id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
             <div class="row">
               <div class="col-12">
    <div class="form-group row">
						<label class="col-form-label col-md-2">Hall Details</label>
					</div>
                    <div class="form-group row">
						<label class="col-form-label col-md-2">Name: {{ $hall_detail->name }}</label>
					</div>
                    <div class="form-group row">
						<label class="col-form-label col-md-2">Description: {{ $hall_detail->description }}</label>
					</div>
                    <div class="form-group row">
						<label class="col-form-label col-md-2">Occupancy: {{ $hall_detail->occupancy }}</label>
					</div>
                    <div class="form-group row">
						<label class="col-form-label col-md-2">Location: {{ $hall_detail->location }}</label>
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



