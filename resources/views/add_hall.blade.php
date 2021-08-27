@extends('dashboard.dashboard_master')
@section('dashboard')

<div class="content-wrapper">
	  <div class="container-full">
<section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Add Halls</h4>
     </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
           <form action="{{ url('/store_hall')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
             <div class="row">
               <div class="col-12">
                <!-- form start -->
                   <div class="form-group">
                       <h5>Name <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="name" class="form-control" required="">
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
                       <h5>Occupancy <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="number" name="occupancy" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Location <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <textarea name="location" class="form-control" required=""></textarea>
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
               <div class="text-xs-right">
                   <input type="submit" value="Add Hall" class="btn btn-rounded btn-info" name="add_hall"/>
               </div>

               </div>

           </form>
        <!-- form start -->
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
