@extends('dashboard.dashboard_master')
@section('dashboard')

<div class="content-wrapper">
	  <div class="container-full">
				<div class="box-header">
				  <h3 class="box-title">User List</h3>
                  <a href="{{ route('invitation') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add User</a>
				</div>

				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>Role</th>
                                <th>Employee ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Contact Number</th>
								<th>Email</th>
								<th width="50px;">Action</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($users as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->role()->first()->name }}</td>
                                <td>{{ $user->employeeid }}</td>
								<td>{{ $user->name }}</td>
                                <td>{{ $user->designation }}</td>
                                <td>{{ $user->department }}</td>
                                <td>{{ $user->contactnumber }}</td>
								<td>{{ $user->email }}</td>
								<td>
                                <a href="{{ route('edit_user', $user->id)}}" class="btn-sm btn-primary">Edit</a>
                                <a href="{{ route('delete_user', $user->id)}}" class="btn-sm btn-danger" id="delete">Delete</a>
                                </td>
							</tr>
                        @endforeach
						</tbody>
						<tfoot>

						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>
  </div>








@endsection
