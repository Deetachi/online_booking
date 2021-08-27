@extends('dashboard.dashboard_master')
@section('dashboard')

<div class="content-wrapper">
	  <div class="container-full">
<section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Edit Vehicle</h4>
     </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
       <!-- form start -->
           <form action="{{ url('/update_vehicle', $vehicle->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
             <div class="row">
               <div class="col-12">

                   <div class="form-group">
                       <h5>Name <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="name" class="form-control" value="{{ $vehicle->name }}" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Number<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="number" name="number" value="{{ $vehicle->number }}" class="form-control" required data-validation-required-message="This field is required"> </div>
                   </div>
                   <div class="form-group">
                       <h5>Description <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <textarea class="form-control" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})"
                           data-validation-regex-message="Enter Valid Email" name="description"> {{ $vehicle->description }}</textarea>
                   </div>
                   </div>

                   <div class="form-group">
								<h5>Driver <span class="text-danger" >*</span></h5>
								<div class="controls" placeholder="Select Driver">
									<select name="driver" id="select" required class="form-control" aria-invalid="false">
                                        <option value="" selected="" disabled="">Select Driver</option>
                                        @foreach($drivers as $driver)
                                            <option>{{ $driver->name }}</option>
                                        @endforeach
									</select>
								</div>
                    </div>
               </div>
               <div class="text-xs-right">
                   <input type="submit" value="Update" class="btn btn-rounded btn-info" name="update_vehicle"/>
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
