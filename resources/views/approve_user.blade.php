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
				  <h3 class="box-title">Approved</h3>
                  </div>

				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
                    <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Employee ID</th>
								<th>Name</th>
								<th>Department</th>
								<th>Designation</th>
								<th>From Date</th>
                                <th>To Date</th>
                                <th>Contact No</th>
                                <th>Purpose</th>
                                <th>Status</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td></td>
								<td>{{ $user->name }}</td>
                                <td>{{ $user->department }}</td>
                                <td>{{ $user->designation }}</td>
                                <td>{{ $user->fromdate }}</td>
                                <td>{{ $user->todate}}</td>
								<td>{{ $user->contactno }}</td>
                                <td>{{ $user->purpose }}</td>
								<td>
                                <a href="" class="btn btn-circle btn-success btn-sm mb-5"><i class="mdi mdi-check"></i></a>
                                </td>
							</tr>

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
