@extends('layouts.master')
@section('stylesheet')
<link href="{{ asset('css/freelancerProfile.css')}}" rel="stylesheet">
@endsection
@section('contentSection')
<!--     freelancer profile start    -->
<div class="freelancerpage pb-5">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-12">
				<div class="freelancerprofile my-4 pb-4">
					<div class="row">
						<div class="col-12 col-md-12 col-sm-12 col-xl-4 col-lg-4 profilepic mt-4">
							<img src="images/imran.png" alt=""
							class="ml-4">
						</div>
						<div class="col-8 col-md-12 col-sm-12 col-xl-8 col-lg-8 freelancerbio mt-4 ">
							<div class="freelancerbio_body">
								
								<h2>Imran Hossain</h2>
								<small>Web Developer</small>

								<p><strong>Location:</strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dhaka,Bangaldesh</p>

								<p><strong>Profile Created:</strong>&nbsp;&nbsp; &nbsp;&nbsp; 2 years ago</p>

								<div class="row mt-4">
									<div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-4 buttonnn ">
										<a href="#" class="btn btn-success ">Download CV</a>
									</div>
									<div class="col-12 col-xl-8 col-lg-8 col-md-8 col-sm-8 ">
										<div class="socialiconbox">
											<ul>
												<a href="#" class="fa fa-facebook" style="background-color: #375d93;"></a>
												<a href="#" class="fa fa-twitter" style="background-color:#43afe9;"></a>
												<a href="#" class="fa fa-linkedin" style="background-color: #007eb3;"></a>
												<a href="#" class="fa fa-envelope" style="background-color: #D02120;"></a>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Freelancer Description start-->
				<div class="freelancerdescription">
					<div class="innermargin m-4 p-4">
						<h2>Candidate Description</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quos minima dolor delectus culpa est error voluptatum iste, autem provident. Doloremque repellendus libero veniam quisquam voluptatibus eum vel asperiores praesentium maxime, odio vero earum ullam, corporis excepturi impedit rerum iure.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quos minima dolor delectus culpa est error voluptatum iste, autem provident. Doloremque repellendus libero veniam quisquam voluptatibus eum vel asperiores praesentium maxime, odio vero earum ullam, corporis excepturi impedit rerum iure. Error amet reiciendis odit beatae, eum, voluptate exercitationem ratione.</p>
					</div>
				</div> <!--freelancer description -->

				<!--Freelancer Education Start-->
				<div class="freelanceredu">
					<div class="innermargin m-4 p-4">
						<h2><i class="fa fa-graduation-cap pr-3"></i>EDUCATION</h2>
						
						<div class="row">
							<div class="edudetails mt-3">
								<p style="color: #0caa41; font-size:12px;">Walters University &nbsp;&nbsp;&nbsp;&nbsp;     2002 - 2004</p>
								<h2>Masters in Fine Arts</h2>
								<p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p>
							</div>
							
						</div>

						<div class="row">
							<div class="edudetails mt-5">
								<p style="color: #0caa41; font-size:12px;">Glibe University  &nbsp;&nbsp;&nbsp;&nbsp;     2012 - 2015</p>
								<h2>Tommers College</h2>
								<p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p>
							</div>
							
						</div>

						<div class="row">
							<div class="edudetails mt-5">
								<p style="color: #0caa41; font-size:12px;">Milan University  &nbsp;&nbsp;&nbsp;&nbsp;     2012 - 2015</p>
								<h2>Diploma in Fine Arts</h2>
								<p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p>
							</div>
							
						</div>
					</div>
				</div>	
				<!--Freelancer Education End-->

				<!--Freelancer Experience Start-->
				<div class="freelanceredu">
					<div class="innermargin m-4 p-4">
						<h2><i class="fa fa-users pr-3"></i>EXPERIENCE</h2>
						
						<div class="row">
							<div class="edudetails mt-3">
								<p style="color: #0caa41; font-size:12px;">Altra Solution &nbsp;&nbsp;&nbsp;&nbsp;     20012 - 2014</p>
								<h2>Masters in Fine Arts</h2>
								<p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p>
							</div>
							
						</div>

						<div class="row">
							<div class="edudetails mt-5">
								<p style="color: #0caa41; font-size:12px;">Barde Workers   &nbsp;&nbsp;&nbsp;&nbsp;     2014 - 2016</p>
								<h2>Tommers College</h2>
								<p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p>
							</div>
							
						</div>

						<div class="row">
							<div class="edudetails mt-5">
								<p style="color: #0caa41; font-size:12px;">2012 - 2015</p>
								<h2>Self Employed Professional</h2>
								<p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p>
							</div>
							
						</div>
					</div>
				</div>
				<!--Freelancer Experience End-->

				<!--Freelancer Skill-bar Start-->
				<div class="experties  ">
					<div class="innermargin m-4 p-4">
						<h2><i class="fas fa-book-open pr-3"></i>EXPERTIES</h2>

						<div class="skills mt-4 ">
							<li>
								<h3>HTML</h3><span class="bar "><span class="html innertext ">90%</span></span>
							</li>
							<li>
								<h3>WordPress</h3><span class="bar"><span class="wordpress innertext">80%</span></span>
							</li>
							<li>
								<h3>JavaScript</h3><span class="bar"><span class="javascript innertext">85%</span></span>
							</li>
							<li>
								<h3>jQuery</h3><span class="bar"><span class="jquery innertext">90%</span></span>
							</li>
							<li>
								<h3>PHP</h3><span class="bar"><span class="php innertext">80%</span></span>
							</li>
							<li>
								<h3>mySql</h3><span class="bar"><span class="mysql innertext">75%</span></span>
							</li>						
						</div>
					</div>				
				</div>
				<!--Freelancer Skill-bar End-->

				<!--Freelancer portfolio Start-->
				<div class="portfolio ">
					<div class="innermargin m-4 p-4">
						<h2><i class="fas fa-briefcase pr-3"></i>PORTFOIO</h2>
						<div class="portfolioimg mt-4 pb-3">
							<div class="row">
								<div class="col-6">
									<a href="#"><img src="images/portfolio1.png" alt=""></a>
								</div>
								<div class="col-6">
									<div class="row">
										<div class="col-6">
											<a href="#"><img src="images/portfolio1.png" alt=""></a>
										</div>
										<div class="col-6">
											<a href="#"><img src="images/portfolio1.png" alt=""></a>
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-6">
											<a href="#"><img src="images/portfolio1.png" alt=""></a>
										</div>
										<div class="col-6">
											<a href="#"><img src="images/portfolio1.png" alt=""></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!--Freelancer portfolio End-->

				<!--Freelancer Honors&award Start-->
				<div class="honaward pb-2">
					<div class="innermargin m-4 p-4">
						<h2><i class="fa fa-trophy pr-3"></i>HONORS & AWARDS</h2>
						
						<div class="row">
							<div class="awarddetails mt-3">
								<p style="color: #0caa41; font-size:12px;">Distinguished Service Award &nbsp;&nbsp;&nbsp;&nbsp;     2017</p>
								<h2>Distinguished Service Award</h2>
								<p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside ignobly allegedly more when vehement.</p>
							</div>
							
						</div>

						<div class="row">
							<div class="awarddetails mt-5">
								<p style="color: #0caa41; font-size:12px;">Robin Milner Young Researcher Award  &nbsp;&nbsp;&nbsp;&nbsp;     2016</p>
								<h2>Robin Milner Young Researcher Award</h2>
								<p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p>
							</div>	
						</div>

						<div class="row">
							<div class="awarddetails mt-5">
								<p style="color: #0caa41; font-size:12px;">Doctoral Dissertation Awardy  &nbsp;&nbsp;&nbsp;&nbsp;     2015</p>
								<h2>Doctoral Dissertation Award</h2>
								<p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p>
							</div>
							
						</div>
						<div class="row">
							<div class="awarddetails mt-5">
								<p style="color: #0caa41; font-size:12px;">Programming Languages Achievement  &nbsp;&nbsp;&nbsp;&nbsp;     2018</p>
								<h2>Programming Languages Achievement</h2>
								<p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p>
							</div>
							
						</div>
					</div>
				</div>		
				<!--Freelancer Honors&award End-->
			</div>

			<div class="col-12 col-md-8 col-sm-10 col-xm-10 col-xl-4 col-lg-4 candview mt-4">
				<h2>Candidate Overview</h2>
				<div class="infobox mt-3 ">
					  <ul class="list-group">
   					 	<li class="list-group-item candinfo rounded-0 py-4">
   					 		<div class="row">
   					 			<div class="col-3">
   					 				<i class="fa fa-graduation-cap"></i>
   					 			</div>
   					 			<div class="col-9">
   					 				<div class="candinfo">
   					 					<small>Academic Level</small>
   					 					<p class="mt-1">Certificate</p>
   					 				</div>
   					 			</div>
   					 		</div>
   					 	</li>
   					 	<li class="list-group-item candinfo rounded-0 py-4">
   					 		<div class="row">
   					 			<div class="col-3">
   					 				<i class="fa fa-user"></i>
   					 			</div>
   					 			<div class="col-9">
   					 				<div class="candinfo">
   					 					<small>Age</small>
   					 					<p class="mt-1">22-24 Years</p>
   					 				</div>
   					 			</div>
   					 		</div>
   					 	</li>
   					 	<li class="list-group-item candinfo rounded-0 py-4">
   					 		<div class="row">
   					 			<div class="col-3">
   					 				<i class="fas fa-hand-holding-usd"></i>
   					 			</div>
   					 			<div class="col-9">
   					 				<div class="candinfo">
   					 					<small>Salary</small>
   					 					<p class="mt-1">30000</p>
   					 				</div>
   					 			</div>
   					 		</div>
   					 	</li>
   					 	<li class="list-group-item candinfo rounded-0 py-4">
   					 		<div class="row">
   					 			<div class="col-3">
   					 				<i class="fas fa-user-friends"></i>
   					 			</div>
   					 			<div class="col-9">
   					 				<div class="candinfo">
   					 					<small>Gender</small>
   					 					<p class="mt-1">Male</p>
   					 				</div>
   					 			</div>
   					 		</div>
   					 	</li>
   					 	<li class="list-group-item candinfo rounded-0 py-4">
   					 		<div class="row">
   					 			<div class="col-3">
   					 				<i class="fas fa-certificate"></i>
   					 			</div>
   					 			<div class="col-9">
   					 				<div class="candinfo">
   					 					<small>Industry </small>
   					 					<p class="mt-1">Banking</p>
   					 				</div>
   					 			</div>
   					 		</div>
   					 	</li>
					 </ul>
				</div>

				<!--Contact form Start-->
				<div class="Contact_form mt-4">
					<h2>Contact Form</h2>
					<div class="contact_form_body border">
						<form action="" class="m-2 p-3">
							<div class="form-group">
								<label for="name">User Name:</label>
								<input type="text" class="form-control rounded-1" id="name" placeholder="Enter Your Name" required>
							</div>
							<div class="form-group">
								<label for="name">Email Address:</label>
								<input type="email" class="form-control rounded-1" id="email" placeholder="Enter Your Email Address" required>
							</div>
							<div class="form-group">
								<label for="phn">Phone Number:</label>
								<input type="email" class="form-control rounded-1" id="phn" placeholder="Enter Your Phone Number" required>
							</div>
							<div class="form-group">
								<label for="messege">Messege:</label>
								<textarea class="form-control" name="" id="messege" cols=" " rows="5" placeholder="Type Your Messege Here"></textarea>
							</div>
							<div class="form-group">
								<label for="check" class="form-check-label"></label>

								<input type="checkbox" class="form-check-input"><p>You accept our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
							<div class="send_now_button mt-4">
								<a href="#" class="w-100 btn btn-success">Send Now</a>
							</div>
						</form>
						
					</div>
				</div>
				<!--Contact form End-->
				
			</div>
		</div>
	</div>
</div>

@endsection