@extends('layouts.master')
@section('stylesheet')
<link href="{{ asset('css/jobbox.css')}}" rel="stylesheet">
@endsection
@section('contentSection')
<!--sing-->
<div class="register-form" style="background-color:#F4F4F4">   	
 	<div class="container">
 		<div class="row">
 		<div class="col-md-10 col-lg-10 col-sm-10 offset-1">
 		<div class="card mt-5 mb-5">
 			<div class="modal-content" style="background: #274361;">
 			 <div class="card-header">
 			 	<span class="float-right" ><a href="signin.html" style="font-size: 22px;">Log in</a></span>
 				<h4 class="text-light">Sign Up</h4>
 				 
 			 </div>
 			 <div class="card-body">
 			<form action="{{route('signupuser')}}" method="POST">
			 	@csrf
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="" style="color: #fff;">First Name</label>
				      <input type="text" class="form-control" name="first_name" id="" placeholder="First Name">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="" style="color: #fff;">Last Name</label>
				      <input type="text" class="form-control" name="last_name" id="" placeholder="Last Name">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="" style="color: #fff;">Phone Number</label>
				      <input type="text" class="form-control" name="phone" id="" placeholder="Phone Number">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="" style="color: #fff;">Email</label>
				      <input type="email" class="form-control" name="email" id="" placeholder="Email">
				    </div>
				  </div>

				   <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="" style="color: #fff;">Password</label>
				      <input type="Password" class="form-control" name="password" id="" placeholder=" Password">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="" style="color: #fff;"> Confirm Password</label>
				      <input type="Password" class="form-control" name="password_confirmation" id="" placeholder="Confirm Password">
				    </div>
				  </div>

				    <div class="form-row">
				    <div class="form-group col-md-12">
				     <input type="submit"  name="submit" value="Submit" class="btn btn-success float-right">
				    </div>
				  </div>
			</form>
 		</div>
 		  </div>
 		</div>
 	</div>


				
		
	</div>
</div>
</div>


<!--sing-->
@endsection