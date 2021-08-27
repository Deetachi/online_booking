@extends('dashboard.dashboard_master')
@section('dashboard')

<div class="content-wrapper">
	  <div class="container-full">
<section class="content">

<!-- header -->
<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Add Vehicle</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Manage Vehicles</li>
								<li class="breadcrumb-item active" aria-current="page">Add Vehicle</li>
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
           <form action="{{ url('/store_vehicle')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
             <div class="row">
               <div class="col-12">
                <!-- form start -->
                   <div class="form-group">
                       <h5>Vehicle Name <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="name" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Vehicle Number <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="number" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Description <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <textarea name="description" class="form-control" required=""></textarea>
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
								<h5>Driver <span class="text-danger" >*</span></h5>
								<div class="controls" placeholder="Select Driver">
									<select name="driver" id="select" required class="form-control" aria-invalid="false">
                                        <option value="" selected="" disabled="">Select Driver</option>
                                        @foreach($drivers as $driver)
                                            <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                                        @endforeach
									</select>
								</div>
               </div>
               <div class="text-xs-right">
                   <input type="submit" value="Add Vehicle" class="btn btn-rounded btn-info" name="add_vehicle"/>
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
