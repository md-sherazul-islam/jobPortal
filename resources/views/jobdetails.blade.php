@extends('layouts.master')
@section('stylesheet')
<link href="{{ asset('css/jobditals.css') }}" rel="stylesheet">
@endsection
@section('contentSection')
 <!--================Serach Area =================-->
 <div class="search-critera">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			   <div class="jobs-match">
				 <span>36187</span>
				 <p class="lead">Jobs Matching your search criteria</p>
			   </div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="pages ">
			  <ul class="pagination justify-content-end">
			     <li class="page-item disabled">
			       <a class="page-link" href="#">Pages:</a>
			     </li>
			     <li class="page-item">
			    	<a class="page-link active" href="#">1</a>
			     </li>
			     <li class="page-item">
			    	<a class="page-link" href="#">2</a>
			     </li>
			     <li class="page-item">
			    	<a class="page-link" href="#">3</a>
			     </li>
			      <li class="page-item">
			    	<a class="page-link" href="#">4</a>
			     </li>
			      <li class="page-item">
			    	<a class="page-link" href="#">5</a>
			     </li>
			     <li class="page-item">
			      <a class="page-link" href="#">.....</a>
			     </li>
			      <li class="page-item">
			      <a class="page-link" href="#">145</a>
			     </li>
			  </ul>
             </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="key mt-4">
					<div class="filter">
						<p style="font-size: 18px;color: #FCB315;">Filters by</p>
						<div class="tri">
							
						</div>
					</div>
				
					<div class="keywords">
						<p>Keywords</p>
					</div>
				</div>
			</div>
		
		</div>
	</div>
</div>
<!--================Serach Area End =====================-->
<div class="second-part">
	<div class="main-part mt-5">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-sm-12">
			<div class="res-nav1">
                 <div class="nav1">
				<ul class="nav nav-pills">
					<li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#">Keywords</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="pill" href="#">Category</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="pill" href="#">Industry</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="pill" href="#">Location</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="pill" href="#">Posted deadline</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="pill" href="#">Newspaper jobs</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="pill" href="#">Others filters</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="pill" href="#">Clear all</a></li>
				</ul>

				</div>
				</div>
				</div>
				</div>
				

                 <div class="row">
                 	
                 	<div class="col-12">
                 <div class="nav2">
				<div class="nabvar navbar-expand-sm xxx bg-info navbar-light">
					<button data-toggle="collapse" data-target="#mmm" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

					<div id="mmm" class="collapse navbar-collapse">
						<ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link active" href="#">Keywords</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Category</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Industry</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Location</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Posted deadline</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Newspaper job</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Other filter</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Clear all</a></li>
						</ul>
						

					</div>

				</div>

				</div>
				</div>
				

				</div>


			<div class="row main_j">
				<div class="col-2 col-xl-2 col-lg-2 col-md-2 col-sm-2">
					<div class="part">
					<ul class="list-group">
						<li class="list-group-item imo bg-secondary"><a href="#"> <img src="images/s1.png" alt="">Keywords</a></li>
						<li class="list-group-item imo"><a href="#"> <img src="images/s2.png" alt="">Category</a></li>
						<li class="list-group-item imo"><a href="#"> <img src="images/s3.png" alt="">Industry</a></li>
						<li class="list-group-item imo"><a href="#"> <img src="images/s4.png" alt="">Location</a></li>
						<li class="list-group-item imo"><a href="#"> <img src="images/s5.png" alt="">Posted <span >Deadline</span></a></li>
						<li class="list-group-item imo"><a href="#"> <img src="images/s6.png" alt="">Newspaper <span>Job</span> </a></li>
						<li class="list-group-item imo"><a href="#"> <img src="images/s7.png" alt="">Others filters</a></li>
						<li class="list-group-item imo"><a href="#"> <img src="images/s8.png" alt="">Clear all</a></li>
					</ul>
					</div>
				</div>

				<div class=" col-xl-8 col-sm-12 col-xs-12 col-lg-8 col-md-8  mmm">
					
					<div class="row">

					<div class="col-md-6">

					<div class="text_left">
						<p>Click at the job titel to view details.</p>
					</div>

					</div>
					
					<div class="col-md-6 ccc">

					<div class="col-xl-8 col-lg-8 col-md-7  text-right">
						<p class="">Jobs per page</p>

					</div>


						<div class="drop-bar col-xl-4 col-lg-4 col-md-5  float-right clearfix dropbar">
							<div class="dropdown">
						
						<a href="#" data-toggle="dropdown">10 <i class="fa fa-caret-down"></i></a>
					
						
						
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">1</a></li>
							<li><a class="dropdown-item" href="#">2</a></li>
							<li><a class="dropdown-item" href="#">3</a></li>
							<li><a class="dropdown-item" href="#">4</a></li>
							<li><a class="dropdown-item" href="#">5</a></li>
							<li><a class="dropdown-item" href="#">6</a></li>
							<li><a class="dropdown-item" href="#">7</a></li>
							<li><a class="dropdown-item" href="#">8</a></li>
							<li><a class="dropdown-item" href="#">9</a></li>
						
						</ul>
					</div>

					</div>

					</div>
					
				</div>	
					
				
						
						@foreach($jobs as $job)
						<div class="middle-part">

							<div class="middle-mid">
							
							<div class="middle-header">
								<h2><a href="{{route('jobdetails.singlejob',[$job->id])}}"> {{$job->job_title}} </a></h2>
								<h4>{{$job->company_name}}</h4>
							</div>

							<div class="middle-body">
								<ul>
								<li><a href="#">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									<span>{{$job->job_location}}</span></a>
								</li>
									<li>
										<a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>{{$job->job_educationalRequirement}}</span>
								</a>
								</li>
								<li><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> <span>{{$job->job_exprience}}</span> </a></li>
							</ul>

							</div>
							<div class="middle-footer">
								<ul>
									<li><a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <span>Deadline: {{$job->job_applicationDeadline}}</span> </a></li>
								</ul>
							</div>
						</div>

						</div>
						@endforeach

						

						


						<div class="last-part_j">

						<div class="row">

						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">


						      <div class="carousel-part">

							<a href=""><i class="fa fa-angle-double-left" aria-hidden="true"></i><span>Previous</span></a>
							<span>Next</span> <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>

						</div>
						
					</div>

					<div class="col-4">

						<div class="middle-drop">
							<div class="drop-title">
							<p>Jobs per page</p>
							</div>

							<div class="mid-drop">
							<div class="dropdown">
						
						<a href="#" data-toggle="dropdown">10 <i class="fa fa-caret-down"></i></a>
					
						
						
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">1</a></li>
							<li><a class="dropdown-item" href="#">2</a></li>
							<li><a class="dropdown-item" href="#">3</a></li>
							<li><a class="dropdown-item" href="#">4</a></li>
							<li><a class="dropdown-item" href="#">5</a></li>
							<li><a class="dropdown-item" href="#">6</a></li>
							<li><a class="dropdown-item" href="#">7</a></li>
							<li><a class="dropdown-item" href="#">8</a></li>
							<li><a class="dropdown-item" href="#">9</a></li>
						
						</ul>
					</div>

					</div>

						</div>
						
					</div>

					<div class="col-4">

						<div class="pagi">

						<ul class="pagination">
							<li class="page-item"><a class="page-link active" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item"><a class="page-link" href="#">.</a></li>
							<li class="page-item"><a class="page-link" href="#">.</a></li>
							<li class="page-item"><a class="page-link" href="#">.</a></li>
							<li class="page-item"><a class="page-link" href="#">.</a></li>
							<li class="page-item"><a class="page-link" href="#">.</a></li>
							<li class="page-item"><a class="page-link" href="#">165</a></li>
						</ul>

						</div>

						
					</div>
							
						</div>

						</div>
	
               </div>
					
				
				<div class="col-2 col-xl-2 col-lg-2 col-md-2 col-sm-0 iii">
					<div class="frist-pic">
					 	<img src="images/j.jpg" alt="">
					</div>
					<div class="second-pic">
						<img src="images/ama.png" alt="">
					</div>
					<div class="third-pic">
						<img src="images/br.png" alt="">
					</div>
				</div>


					
		</div>

	</div>

	</div>
</div>
<!--================Our pencile box traning==============-->
<div class="pencile mt-2">
	<div class="container">
		<div class="full_pencile">
		<div class="row">
			<div class="col-12">
				<div class="pencile_t text-center">
					<h4>Our Pencilbox Traning</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
				<div class="pencil_left">
					<h4>Public Speaking and Presentation Techniques</h4>
					<p>No. of Classes/Sessions: 6 sessions   </p>
					<p>Course Duration: 13 November - 2 December 2019   </p>
					<p>Total Hours: 18</p>
					<p>Class Schedule and Time: </p>
					<p>Monday and Wednesday</p>
					<p>Last Date of Reg:  November 11, 2019</p>
					
					 <a href="#" class="btn btn-block click text-light float-right mt-2"> Click here for detail</a>
					
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
				<div class="pencil_right">
					<h4>Internal Audit including General conception on ISO 9001:2015 
                    </h4>
					<p>No. of Classes/Sessions: 2 Days Long   </p>
					<p>Course Duration: 15 - 16 November 2019</p>
					<p>Class Schedule and Time: Friday & Saturday</p>
					<p>Last Date of Reg:  November 14, 2019</p>
					
					 <a href="#" class="btn  text-light click1 float-right mt-2"> Click here for detail</a>
				   
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
@endsection