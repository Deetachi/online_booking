@extends('dashboard.dashboard_master')
@section('dashboard')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">FAQ</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Pages</li>
								<li class="breadcrumb-item active" aria-current="page">FAQ</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			<div class="col-12">
			  <div class="box">
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-pills rounded nav-justified">
						<li class="nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">General</a> </li>
						<li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Vehicle Booking</a> </li>
						<li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Hall Booking</a> </li>
						</ul>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			  <div class="box">
				<div class="box-body">
					<!-- Tab panes -->
					<div class="tab-content">
						<div id="navpills-1" class="tab-pane active">
							<!-- Categroy 1 -->
							<div class=" tab-pane animation-fade active" id="category-1" role="tabpanel">
							  <div class="panel-group panel-group-simple panel-group-continuous" id="accordion2"
							  aria-multiselectable="true" role="tablist">
								<!-- Question 1 -->
								<div class="panel">
								  <div class="panel-heading" id="question-1" role="tab">
									<a class="panel-title" aria-controls="answer-1" aria-expanded="true" data-toggle="collapse"
									href="#answer-1" data-parent="#accordion2">
									How can we book a vehicle?
								  </a>
								  </div>
								  <div class="panel-collapse collapse show" id="answer-1" aria-labelledby="question-1"
								  role="tabpanel">
									<div class="panel-body">
									  We can book a vehicle by adding the information of the vehicle and selecting the date and time accordingly.
									</div>
								  </div>
								</div>
								<!-- End Question 1 -->
								<!-- Question 2 -->
								<div class="panel">
								  <div class="panel-heading" id="question-2" role="tab">
									<a class="panel-title" aria-controls="answer-2" aria-expanded="false" data-toggle="collapse"
									href="#answer-2" data-parent="#accordion2">
									Can we edit our information after booking a vehicle?
								  </a>
								  </div>
								  <div class="panel-collapse collapse" id="answer-2" aria-labelledby="question-2"
								  role="tabpanel">
									<div class="panel-body">
									Only Admins have the privilege to edit the information of user.
									</div>
								  </div>
								</div>
								<!-- End Question 2 -->
							  </div>
							</div>
							<!-- End Categroy 1 -->
						</div>
						<div id="navpills-2" class="tab-pane">
							<!-- Categroy 2 -->
							<div class="tab-pane animation-fade" id="category-2" role="tabpanel">
							  <div class="panel-group panel-group-simple panel-group-continuous" id="accordion"
							  aria-multiselectable="true" role="tablist">
								<!-- Question 5 -->
								<div class="panel">
								  <div class="panel-heading" id="question-5" role="tab">
									<a class="panel-title" aria-controls="answer-5" aria-expanded="true" data-toggle="collapse"
									href="#answer-5" data-parent="#accordion">
									Do we know the status of the hall booking?
								  </a>
								  </div>
								  <div class="panel-collapse collapse show" id="answer-5" aria-labelledby="question-5"
								  role="tabpanel">
									<div class="panel-body">
									  Yes, the status of the hall booking would be reflected by the admin when he/she approve or reject the request with regard to the avaibility of halls.
									</div>
								  </div>
								</div>
								<!-- End Question 5 -->
								<!-- Question 6 -->
								<div class="panel">
								  <div class="panel-heading" id="question-6" role="tab">
									<a class="panel-title" aria-controls="answer-6" aria-expanded="false" data-toggle="collapse"
									href="#answer-6" data-parent="#accordion">
									Can we define the number of members for the meeting?
								  </a>
								  </div>
								  <div class="panel-collapse collapse" id="answer-6" aria-labelledby="question-6"
								  role="tabpanel">
									<div class="panel-body">
									  Yes we have an option as occupancy to be filled up for the number of memebers going to be present in the meeting.
									</div>
								  </div>
								</div>
								<!-- End Question 6 -->
							  </div>
							</div>
							<!-- End Categroy 2 -->
						</div>
						<div id="navpills-3" class="tab-pane">
							<!-- Categroy 3 -->
							<div class="tab-pane animation-fade" id="category-3" role="tabpanel">
							  <div class="panel-group panel-group-simple panel-group-continuous" id="accordion1"
							  aria-multiselectable="true" role="tablist">
								<!-- Question 8 -->
								<div class="panel">
								  <div class="panel-heading" id="question-8" role="tab">
									<a class="panel-title" aria-controls="answer-8" aria-expanded="true" data-toggle="collapse"
									href="#answer-8" data-parent="#accordion1">
									Is this portal used for other agencies as well?
								  </a>
								  </div>
								  <div class="panel-collapse collapse show" id="answer-8" aria-labelledby="question-8"
								  role="tabpanel">
									<div class="panel-body">
									  No, as for now its only for TashiCell.
									</div>
								  </div>
								</div>
								<!-- End Question 8 -->
								<!-- Question 9 -->
								<div class="panel">
								  <div class="panel-heading" id="question-9" role="tab">
									<a class="panel-title" aria-controls="answer-9" aria-expanded="false" data-toggle="collapse"
									href="#answer-9" data-parent="#accordion1">
									Can this portal be implemented in real?
								  </a>
								  </div>
								  <div class="panel-collapse collapse" id="answer-9" aria-labelledby="question-9"
								  role="tabpanel">
									<div class="panel-body">
									  Yes it can be implemented in real scnerio.
									</div>
								  </div>
								</div>
								<!-- End Question 9 -->

							  </div>
							</div>
							<!-- End Categroy 3 -->
						</div>

						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->

@endsection
