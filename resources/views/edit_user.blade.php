@extends('dashboard.dashboard_master')
@section('dashboard')

<div class="content-wrapper">
	  <div class="container-full">
<section class="content">

<!-- Basic Forms -->
<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Edit Users</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Manage Users</li>
								<li class="breadcrumb-item active" aria-current="page">Edit users</li>
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
           <form action="{{ url('/update_user', $user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
             <div class="row">
               <div class="col-12">
               @if(Auth::user()['role']['name'] == 'super_admin')
                <div class="form-group">
								<h5>User Role <span class="text-danger" >*</span></h5>
								<div class="controls" placeholder="Select Role">
									<select name="usertype" id="select" required class="form-control" aria-invalid="false">
                                    @if($user->role()->first()->name == 'admin')
										<option value="admin" selected>Admin</option>
										<option value="ticl_user">User</option>
                                    @endif

                                    @if($user->role()->first()->name == 'ticl_user')
                                        <option value="admin">Admin</option>
										<option value="ticl_user" selected>User</option>
                                    @endif
									</select>
								</div>
               </div>
               @endif
               @if(Auth::user()['role']['name'] == 'super_admin')
               <div class="form-group">
                       <h5>Employee ID <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="number" name="employeeid" value="{{ $user->employeeid }}" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   @endif
                   <div class="form-group">
                       <h5>Name <span class="text-danger">*</span></h5>
                       <div class="controls">

                           <input type="text" name="name" class="form-control" value="{{ $user->name }}" required="">

                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Designation <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="designation" value="{{ $user->designation }}" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Department <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="department" value="{{ $user->department }}" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   <div class="form-group">
                       <h5>Contact Number<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="number" name="contactnumber" value="{{ $user->contactnumber }}" class="form-control" required="">
                       <div class="form-control-feedback"></div>
                   </div>
                   </div>
                   @if(Auth::user()['role']['name'] == 'super_admin')
                   <div class="form-group">
                       <h5>User Email Address <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" class="form-control" value="{{ $user->email }}" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email" name="email"> </div>
                   </div>
                   @endif
                   <div class="form-group">
                       <h5>User Password <span class="text-danger">*</span></h5>
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
                   <input type="submit" value="Update" class="btn btn-rounded btn-info" name="Invite user"/>
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
