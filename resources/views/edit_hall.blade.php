@extends('dashboard.dashboard_master')
@section('dashboard')

<div class="content-wrapper">
	  <div class="container-full">
<section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Edit User</h4>
     </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
        <!-- form start -->
           <form action="{{ url('/update_hall', $hall->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
             <div class="row">
               <div class="col-12">

                   <div class="form-group">
                       <h5>Name <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="name" class="form-control" value="{{ $hall->name }}" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Description <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <textarea class="form-control" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email" name="description"> {{ $hall->description }}</textarea>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Occupancy<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="number" name="occupancy" value="{{ $hall->occupancy }}" class="form-control" required data-validation-required-message="This field is required"> </div>
                   </div>
                   <div class="form-group">
                       <h5>Location <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <textarea name="location" class="form-control" required> {{ $hall->location }} </textarea> </div>
                   </div>

               </div>
               <div class="text-xs-right">
                   <input type="submit" value="Update" class="btn btn-rounded btn-info" name="update_hall"/>
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
