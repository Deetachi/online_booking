@extends('dashboard.dashboard_master')
@section('dashboard')

<div class="content-wrapper">
	  <div class="container-full">
<section class="content">

<!-- Header -->
<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Add Users</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Manage Users</li>
								<li class="breadcrumb-item active" aria-current="page">Add users</li>
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
           <form action="{{ url('/invite')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
             <div class="row">
               <div class="col-12">
                <div class="form-group">
								<h5>User Role <span class="text-danger" >*</span></h5>
								<div class="controls" placeholder="Select Role">
									<select name="usertype" id="select" required class="form-control" aria-invalid="false">
                                        <option value="" selected="" disabled="">Select Role</option>
										<option value="admin">Admin</option>
										<option value="ticl_user">User</option>
									</select>
								</div>
               </div>
               <div class="form-group">
                       <h5>Employee ID <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="number" name="employeeid" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>User Name <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="name" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Designation <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="designation" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Department <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="department" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Contact Number<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="number" name="contactnumber" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Email Address <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" class="form-control" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email" name="email"> </div>
                   </div>
                   <div class="form-group">
                       <h5>Password <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                   </div>
                   <div class="form-group">
                       <h5>Confirm Password <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="password" name="password2" data-validation-match-match="password" class="form-control" required> </div>
                   </div>

               </div>
               <div class="text-xs-right">
                   <input type="submit" value="Add" class="btn btn-rounded btn-info" name="Invite user"/>
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
