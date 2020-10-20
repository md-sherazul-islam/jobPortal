@extends('layouts.master')
@section('stylesheet')
<link href="{{ asset('css/jobbox.css')}}" rel="stylesheet">
@endsection
@section('contentSection')
<!--sing-->
<div class="info">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-5 col-sm-12">
			<div class="signoption">
				<div class="card-body">
					<div class="signtop">
                          <h3>Sign In</h3>
                          <p>Access all of Pencilbox Training Job services</p>
                      </div>
                         <form>
                          	<div class="form-group mt-3">
                          		<input class="form-control" type="password" placeholder="Password" name="Username">
                          	</div>
                          
                          <div class="form-group fid">
                          	<a href="#"><span>Forget User ID / Password ? </span></a>
                         	<a type="submit" href="resumee.html" class="btn float-right next" value="">Log In</a>
                         </div>

                        </form>
 		    		</div>
 		    		<div class="signmid">
                             <h4 class="text-center">Sign in with</h4>
                        <div class="d-flex flex row justify-content-center">
							<div class="p-2">
								<a href="#"><i class="fab fa-facebook-square faone"></i></a>
							</div>
							<div class="p-2">
								<a href="#"><i class="fab fa-google fatwo" ></i></a>
							</div>
							<div class="p-2">
								<a href="#"><i class="fab fa-linkedin fathree"></i></a>
							</div>
						</div>
                      </div>
                      <form>
                      	<div class="signopton-bottom">
                      	<p class="text-ligh mb-1">Don't have a Pencilbox account?</p>
                          <a href="signupmodl.html" type="submit" class="createA btn btn-lg">Create Account</a>
                       </div>
                      </form>
                  </div>
 		    	</div>
 		    	

				
			<div class="col-md-6 col-lg-7 col-sm-12 mt-4">
				<div class="jobtext">
				  <h4>With My Job Box account, you can <br>manage your profile </h4>
			    <h3></h3>
			   </div>
			<div class="account-iocn mb-4">
				<div class="d-flex flex-row mt-4">
					<div class="pr-5 align-self-start">
						<i class="fas fa-file-alt jobi"></i>
					</div>
					<div>
						<a href=""><p class="lead align-self-end mt-3 jobtext">Customizing your resume has never been easy before.</p></a>
					</div>
				</div>
				<div class="d-flex flex-row mt-3">
					<div class=" pr-5 align-self-start ">
						<i class="fas fa-award jobi"></i>
					</div>
					<div>
						<a href=""><p class="lead  align-self-end mt-3 jobtext">Achieve an internationally recognized certificate.</p></a>
					</div>
				</div>
				<div class="d-flex flex-row mt-3">
					<div class=" pr-5 align-self-start ">
						<i class="fa fa-envelope jobi"></i>
					</div>
					<div>
						<a href=""><p class="lead align-self-end mt-3 jobtext">Email your resume to employers with just one click.</p></a>
					</div>
				</div>
				<div class="d-flex flex-row mt-3">
					<div class=" pr-5 align-self-start ">
						<i class="fas fa-user-shield jobi"></i>
					</div>
					<div>
						<a href=""><p class="lead align-self-end mt-3 jobtext">Manage your resume privacy settings.</p></a>
					</div>
				</div>
				<div class="d-flex flex-row mt-3">
					<div class=" pr-5 align-self-start">
						<i class="fas fa-mail-bulk jobi"></i>
					</div>
					<div>
						<a href=""><p class="lead align-self-end mt-3 jobtext">Apply to jobs through bdjobs app from anywhere, anytime.</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!--sing-->
@endsection