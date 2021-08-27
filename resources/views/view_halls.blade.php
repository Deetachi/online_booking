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
				  <h3 class="box-title">Hall List</h3>
                  </div>

				<!-- /.box-header -->

				<div class="box-body">
					<div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Hall ID</th>
								<th>Name</th>
								<th>Description</th>
								<th>Occupancy</th>
								<th>Location</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($halls as $hall)
							<tr>
								<td>{{ $hall->id }}</td>
                                <td>{{ $hall->name }}</td>
                                <td>{{ $hall->description }}</td>
                                <td>{{ $hall->occupancy }}</td>
                                <td>{{ $hall->location}}</td>
								<td>
                                @if(Auth::user()['role']['name'] == 'super_admin')
                                <a href="{{ route('edit_hall', $hall->id)}}" class="btn btn-info">Edit</a>
                                <a href="{{ route('delete_hall', $hall->id)}}" class="btn btn-danger" id="delete">Delete</a>
                                @else
                                    <a href="{{ route('hall_booking', $hall->id) }}" class="btn btn-circle btn-success btn-sm mb-5">Book</a>
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
