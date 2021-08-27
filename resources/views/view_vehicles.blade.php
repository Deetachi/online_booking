@extends('dashboard.dashboard_master')
@section('dashboard')

<div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header">
				  <h3 class="box-title">Vehicle List</h3>
                  </div>

				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Vehicle ID</th>
								<th>Driver ID</th>
                                <th>Driver Name</th>
								<th>Number</th>
								<th>Description</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($vehicles as $vehicle)
							<tr>
								<td>{{ $vehicle->id }}</td>
                                <td>{{ $vehicle->user_id}}</td>
                                <td>{{ $vehicle->name }}</td>
                                <td>{{ $vehicle->number}}</td>
                                <td>{{ $vehicle->description }}</td>
								<td>
                                @if(Auth::user()['role']['name'] == 'super_admin')
                                <a href="{{ route('edit_vehicle', $vehicle->id)}}" class="btn-sm btn-rounded btn-primary mb-5">Edit</a>
                                <a href="{{ route('delete_vehicle', $vehicle->id)}}" class="btn-sm btn-rounded btn-danger mb-5" id="delete">Delete</a>
                                @else
                                    <a href="{{ route('vehicle_booking', $vehicle->id) }}" class="btn btn-rounded btn-success btn-sm mb-5">Book</a>
                                @endif

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
