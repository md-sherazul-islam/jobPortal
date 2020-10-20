@extends('layouts.master')
@section('stylesheet')
<link href="{{ asset('css/resume.css')}}" rel="stylesheet">
@endsection
@section('contentSection')
<!--Resume-->
<div class="resume-part mt-4">
	<div class="container">
		<div class="row">
			<div class="col col2">
				<div id="accordin" role="tablist">
					<div class="col-md-4  col-sm-12 col-lg-3 ">
				        <div class="home-twoCol float-left">
                        <!-- sidebar menu start-->
            <ul class="sider-barr"> 
                  <li class="activehover">
                     <div role="tab" class="mt-3">	
    					  <a data-toggle="collapse" href="#collapse1">
    					  <i class="fa fa-home"></i>Home</a>
	   	    	    </div>
                  </li>
                   <li>	
                  	  <div class="resume">
			            <p>RESUME</p>
	    		      </div>
                  </li>
                  <li class="activehover">
                     <div role="tab">	
		                <a data-toggle="collapse" href="#collapse2">
			            <i class="fas fa-file-alt"></i>View Resume</a>
	   	    		  </div>
                  </li>
                   <li class="active activehover">
                      <div role="tab">	
    					   <a data-toggle="collapse" href="#collapse3">
    					  <i class="fas fa-file-signature"></i> Edit Resume</a>
	   	    		   </div>
                  </li>
                  <li class="activehover">
                    <div role="tab">	
    					<a data-toggle="collapse" href="#collapse4">
    		             <i class="fas fa-upload"></i>Upload Resume</a>
	   	    		  </div>
                  </li>
                  <li class="activehover">
                    <div role="tab">	
    					  <a data-toggle="collapse" href="#collapse5">
    					  <i class="fa fa-envelope"></i>Email Resume </a>
	   	    		 </div>
                  </li>
                  <li>	
                  	<div class="two-col-myactiviti">
    				  <p>MY ACTIVITIES<p>
	   	    		 </div>
                  </li>
                  <li class="activehover">
                     <div role="tab">	
    					  <a data-toggle="collapse" href="#collapse6">
    					  <i class="fa fa-home"></i>Online Applications</a>
	   	    		  </div>
                  </li>

                  <li class="activehover">
                    <div role="tab">	
    					 <a data-toggle="collapse" href="#collapse7">
    		             <i class="fas fa-paper-plane"></i>Emailed Resume</a>
	   	    		 </div>
                  </li>
                  <li class="activehover">
                      <div role="tab">	
    					<a data-toggle="collapse" href="#collapse8">
    				    <i class="fas fa-star"></i>Shortlisted Jobs </a>
	   	    		  </div>
                  </li>
                  <li class="activehover">
                    <div role="tab">	
    				   <a data-toggle="collapse" href="#collapse9">
    				   <i class="fas fa-id-card-alt"></i>Following Employer</a>
	   	    		 </div>
                  </li>
               
                  <li>	
                    <div class="two-col-imploye">
    				   <p>EMPLOYER ACTIVITIES</p>
	   	    		</div>
                  </li>
                  <li class="activehover">
                    <div role="tab">	
    					 <a data-toggle="collapse" href="#collapse10">
    					 <i class="fas fa-file-alt"></i>Email Resume</a>
	   	    		  </div>
                  </li>
                  <li>	
                  	  <div class="twocol-peronalizaiton">
    					 <p>PERSONALIZATION</p>
	   	    		   </div>
                  </li>
                  <li class="activehover">
                    <div role="tab">	
    					  <a data-toggle="collapse" href="#collapse11">
    				      <i class="fas fa-heart"></i>Favourite Search</a>
	   	    		 </div>
                  </li>
                  <li class="activehover">
                    <div role="tab">	
    					 <a data-toggle="collapse" href="#collapse12">
    				     <i class="fas fa-chalkboard"></i>Training</a>
	   	    		</div>
                  </li>
                  <hr class="mt-0 mb-0">
                  <li class="activehover">
                     <div role="tab">	
    				   <a data-toggle="collapse" href="#collapse13">
    				   <i class="fas fa-cog"></i> Account Settings</a>
	   	    	    </div>
                  </li>
                  <li class="activehover">
                    <div role="tab">	
    					 <a data-toggle="collapse" href="#collapse14">
    				     <i class="fas fa-video"></i>Help Videos</a>
	   	    		</div>
                  </li>
                 <li class="activehover">
                     <div class="two-col-singout mb-3">
    					<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                       <i class="fas fa-sign-out-alt"></i>Sign Out</a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
    			    </div>
                  </li>
              </ul>
          </div>
      </div>


	<div class="col-md-8 col-lg-9 col-sm-12 float-right">
	<div class=home-colnine>
	  <div class="collapse show" id="collapse1" data-parent="#accordin">
	    <div class="home-porfile">
                <div class="row">
                  <div class="col">
                    <div class="myStatus-editResume">
                         <a class="btn_e float-right" href="#"><i class="fa fa-crop"></i> Edit Resume</a>
                     <a class="btn_s float-right" href="#"><i class="fas fa-poll"></i> My Stats</a>
                   
                  </div>
                </div>
              </div>
          
               <div class="mystusr mt-2">
                    
                    <span><i class="fa fa-list mr-2"></i>My Status</span>
                  </div>
                   <div class="card">
                     <div class="personal-text">
                     <h4 class="">Welcome to your My Job Box account!</h4>
                        <p>Here you can check your detailed states like Companies viewed my Resume, Online Application, Emailed Resume, Shortlisted Jobs etc. Beside My Stats in Edit Resume option you can find all features at a glance to add/update.</p>
                    </div>
                  <div class="month_time ">
                    <a class="year float-right " href="">All Time</a>
                    <a class="month float-right" href="">This Month</a>
                    
                  </div>
          
        <div class="card-body"> 
          <div class="infotable">
              <table class="table table-hover">
                <tr>
                  <td>Companies viewed my Resume</td>
                  <td class="">2</td>
                  <td><i class="fa fa-question-circle"></i> </td>
                </tr>
                <tr>
                  <td>Online Application</td>
                  <td>2</td>
                  <td><i class="fa fa-question-circle"></i> </td>
                </tr>
                <tr>
                  <td>Emailed Resume</td>
                  <td>2</td>
                  <td><i class="fa fa-question-circle"></i> </td>
                </tr>
                <tr>
                  <td>Shortlisted Jobs</td>
                  <td>2</td>
                  <td><i class="fa fa-question-circle"></i> </td>
                </tr>
                <tr>
                  <td>Following Employer(s)   </td>
                  <td>2</td>
                  <td><i class="fa fa-question-circle"></i> </td>
                </tr>
                <tr>
                  <td>Resume last updated on</td>
                  <td colspan=2>
                    <strong><i class="fa fa-calendar-alt"></i>  25 Nov 2019</strong>
                  </td>
                  
                </tr>
              </table>
                
            </div>               
        </div>

 
</div>




</div>
</div>
</div>
<!-- View Resume start-->
  <div class="View-resume-top mb-5">
    <div class="collapse" id="collapse2" data-parent="#accordin">
       <div class="icon-view-resume">
         <span><i class="fas fa-eye mr-2"></i>View Resume</span>
      </div>
       <div class="download-cv">
         <p>Here you will get a detailed view of your resume and you can download your resume from Download Resume option. </p>
         <a href="#"><span>Download</span><i class="fas fa-file-signature ml-2"></i></a>
       </div>

        <div class="name-photo">
           <div class="row">
           <div class="col">
            <div class="namecv">
                <h3>{{Auth::user()->user_firstName}} {{Auth::user()->user_lastName}}</h3>
                <p>Address: Lorem ipsum dolor sit amet, sed do eiusmod temp</p>
                <p>Mobile No 1: 01600125456</p>
                <p>Mobile No 2 :01733215647</p>
                <p>E-mail : abcdefg@gmail.com </p>
            </div>
          </div>
          <div class="col">
            <div class="photocv">
               <img src="images/em3.png" alt="" class="images-fluid">
            </div>
          </div>
        </div>
        </div>
<!--carrrer-objective-->
        <div class=" carrer">
             <div class="carrrer-objective">
               <h3>Career Objective :</h3>
               <h4></h4>
             </div>
             <div class="carrer-text">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed  do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
             </div>
        </div>

          <div class=" employe">
             <div class="employe-history">
               <h3>Employment History : </h3>
             </div>
             <div class="employe-text-top">
               <p><strong> Total Year of Experience :</strong> 2.0 Year(s)</p>
               <p class="lead1">1.  Jr. Executive, ( October 2, 2016 - October 2, 2018)</p>

              </div>
               <div class="employe-text-md">
                 <h4>Swift Solution</h4>
                 <p>Company Location : Dhaka</p>
                 <p>Department: Graphics Designer</p>
              </div>
              <div class="employe-text-last">
                 <h4>Duties/Responsibilities</h4>
                 <p>Design all types of banner, stage backdrop, facebook add banner and images, all kind of t-shirts and other art 
                 and design works</p>
             </div>
             </div>
       
<!--academic-qualification-->
        <div class="academic">
            <div class="academic-qualification">
              <h3>Academic Qualification :</h3>
            </div>
             <table style="width: 95%;" class="text-center table table-bordered">
                 <tr>
                   <th width="20%">Exam Title</th>
                   <th width="10%">Concentration/Major</th>
                   <th >Institute</th>
                   <th width="15%">Result</th>
                   <th width="10%">Pas.Year</th>
                 </tr>
                  <tr>
                    <td>Bachelor of Busin-ess Studies (BSS)</td>
                    <td>BBA</td>
                    <td>University of Dhaka </td>
                    <td>Enrolled</td>
                    <td>2019</td>
                  </tr>
                  <tr>
                    <td>HSC</td>
                    <td>Business Studies</td>
                    <td>FM Inter National School & College</td>
                    <td>CGPA:3.67out of 5 </td>
                    <td>2015</td>
                  </tr>
                     <tr>
                    <td>SSC</td>
                    <td>Business Studies</td>
                    <td>Khilgaon Govt. High School</td>
                    <td>CGPA:3.67out of 5 </td>
                    <td>2013</td>
                  </tr>
             </table>
        </div>
<!--traning-summery:-->

             <div class="traning">
            <div class="traning-summery">
              <h3>Training Summary :</h3>
            </div>
            <table style="width: 95%;" class="text-center table table-bordered">
                 <tr>
                   <th width="15%">Training Title</th>
                   <th>Topic</th>
                   <th>Institute</th>
                   <th>Country</th>
                   <th>Location</th>
                   <th>year</th>
                   <th>Duration</th>
                 </tr>
                  <tr >
                    <td>Graphics & Web UI Design</td>
                    <td>Photoshop, Illustrator,</td>
                    <td>BASIS Institute of Techno-logy & Management </td>
                    <td>Bangladesh</td>
                    <td>BDBL bhaban, Ka-wran bazar, Dhaka</td>
                    <td>2019</td>
                    <td>3 months</td>
                  </tr>
                     <tr>
                    <td>CPA Marketing</td>
                    <td>CPA and Affiliate marketing</td>
                    <td>IT Q Solutions</td>
                    <td>Bangladesh</td>
                    <td>70 Fattah plaza (9th Floor), Green road, Dhaka</td>
                    <td>2019</td>
                    <td>3 months</td>
                  </tr>
              
             </table>
        </div>
<!--Career and Application Information:-->
      <div class="carrer-info">
              <div class="carrer-feild">
           <h3>Career and Application Information :</h3>
         </div>
         <div class="Career-information">
            <div class="row">
                 <div class="col-4">
                  <div class="left_p">
                     <p>Looking for</p>
                     <p>Available For </p>
                     <p>Present Salary </p>
                     <p>Expected Salary</p>
                     <p>Preferred Job Category</p>
                     <p>Preferred District </p>
                     <p>Preferred Organization Types </p>
                   </div>
                  </div>
                  <div class="col-8">
                    <div class="right_p">
                     <p> : &nbsp;&nbsp;&nbsp;Mid Level Job</p>
                     <p> : &nbsp;&nbsp;&nbsp;Full Time</p>
                     <p> : &nbsp;&nbsp;&nbsp;Tk. 25000</p>
                     <p> : &nbsp;&nbsp;&nbsp;Tk. 30000</p>
                     <p> : &nbsp;&nbsp;&nbsp;Design/Creative</p>
                     <p> : &nbsp;&nbsp;&nbsp;Dhaka</p>
                     <p> : &nbsp;&nbsp;&nbsp;University, College, IT Enabled Service, School</p>
                   </div>
                  </div>
               </div>
         </div>
       </div>
    <!--Specialization-->            
     <div class="Specialization">
         <div class="Specialization_field">
           <h3>Specialization :</h3>
         </div>
         <div class="field_specialization">
               <table style="width: 95%;" class=" table table-bordered">
                    <tr>
                      <th class="text-center">Fields of Specialization</th>
                    </tr>
                    <tr><td>
                       <ul>
                         <li>Graphic Design (Computer Aided)</li>
                         <li>Adobe Photoshop/ Illustrator</li>
                         <li>Adobe XD</li>
                         
                       </ul>
                     </td>
                    </tr>
               </table>
         </div>
     </div>          
       
<!--Language Proficiency:-->
     <div class="Language">
        <div class="Language-Proficiency">
          <h3>Language Proficiency :</h3>
        </div>
         <div class="Language-content">
             <table style="width: 95%;" class=" table table-bordered">
                 <tr>
                   <th>Language</th>
                   <th>Reading</th>
                   <th>Writing</th>
                   <th>Specking</th>
                 </tr>

                 <tr>
                   <td>Bangla</td>
                   <td>High</td>
                   <td>High</td>
                   <td>High</td>
                 </tr>
                  <tr>
                   <td>English</td>
                   <td>High</td>
                   <td>Medium</td>
                   <td>Medium</td>
                 </tr>
             </table>
         </div>
     </div>

     <!--Personal Information-->
    <div class="personal-information">
         <div class="personal-info">
             <h3>Personal Infomation :</h3>
         </div>
         <div class="personal-info-text">
            <div class="row">
              <div  class="col-4">
                <p>Father's Name   </p>
                <p>Mother's Name    </p>
                <p>Date of Birth    </p>
                <p>Gender         </p>
                <p>Marital Status   </p>
                <p>Nationality      </p>
                <p>National Id No.    </p>
                <p>Religion       </p>
                <p>Permanent Address  </p>
                <p>Current Location  </p>
            </div>
              <div  class="col-8">
                   <p>:&nbsp;&nbsp;&nbsp;MD. Abul Kalam Azad</p>
                   <p>:&nbsp;&nbsp;&nbsp;Rokeya Begam</p>
                   <p>:&nbsp;&nbsp;&nbsp;January 30 1990</p>
                   <p>:&nbsp;&nbsp;&nbsp;Male</p>
                   <p>:&nbsp;&nbsp;&nbsp;Unmarried</p>
                   <p>:&nbsp;&nbsp;&nbsp;Bangladeshi</p>
                   <p>:&nbsp;&nbsp;&nbsp;2235688713</p>
                   <p>:&nbsp;&nbsp;&nbsp;Islam</p>
                   <p>:&nbsp;&nbsp;&nbsp;sed do eiusmod tempor incididunt ut labo</p>
                   <p>:&nbsp;&nbsp;&nbsp;Dhaka </p>
              </div>
          </div>
       </div>
    </div>
    <!--Reference (s):-->
    <div class="reference">
        <div class="referecne-head">
            <h3>Reference (s) :</h3>
        </div>
        <div class="reference-info ">
              <div class="row pb-3">
              <div  class="col-4">
                <p>Name</p>
                <p>Organization</p>
                <p>Designation </p>
                <p>Address</p>
                <p>Mobile</p>
                <p>Relation</p>
                
            </div>
              <div  class="col-8">
                   <p>:&nbsp;&nbsp;&nbsp; MD. Kuddus Ali</p>
                   <p>:&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                   <p>:&nbsp;&nbsp;&nbsp;Assistant English Professor</p>
                   <p>:&nbsp;&nbsp;&nbsp;Ut enim ad minim, 235/kk, Mkdshgis</p>
                   <p>:&nbsp;&nbsp;&nbsp;2235688713</p>
                   <p>:&nbsp;&nbsp;&nbsp;Relative</p>
                   
              </div>
          </div>
        </div>
    </div>
   
     
</div>
</div>

<!-- View Resume End-->

  <div class="collapse" id="collapse3" data-parent="#accordin">
       <div class="card menu-bar">
       	    <div class="personal-text1">
       	    	<p>Here you can edit your resume in five different steps (Personal, Education/ Training, Employment, Other Information and Photograph). To enrich your resume provide authentic information. </p>
       	    </div>
       	  <div class="card-header headerbg">
       <div id="myBtnContainer">
           <!-- <span></span> -->
    <nav class="navbar navbar-light navbar-expand-lg ">
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#NavbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="NavbarNav">
       <ul class="navbar-nav nav1">
      <button class=" btn1 btn" onclick="filterSelection('personal-info')"><i class="fas fa-user"></i> personal</button>
      <button class=" btn1 btn" onclick="filterSelection('education-info')"><i class="fas fa-graduation-cap"></i> Education/Traning</button>
      <button class=" btn1 btn" onclick="filterSelection('employe-info')"> <i class="fas fa-briefcase"></i> Employment</button>
      <button class=" btn1 btn" onclick="filterSelection('othder-info')"> <i class="fas fa-list"></i>Others Information</button>
       <button class=" btn1 btn" onclick="filterSelection('photo-info')"> <i class="fas fa-camera"></i>Photogrph</button>
     </ul>
     </div>
    </nav>
		</div>
 </div>
            <!--==============Personal Information============-->
<div id="accordin1" role="tablist">
   <div class="filterDiv personal-info mt-3">
  	     <div class="card-header headbg2">
            <h6 class="mb-0">
              <div data-toggle="collapse" href="#collapse11">
  	     	 <span><i class="fab fa-youtube"></i>Personal</span>
              </div>
          </h6>
  	     </div>
         <div id="collapse11" class="collapse show" data-parent="#accordin1">
  	     <div class="card-body">
          <div class="personalDetails">
            <div class="row">
              <div class="col">
                <button class="btn btn-primary btn-sm float-right" id="personalDetailsEdit">Edit</button>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <b><label>First Name</label></b>
                <p>{{Auth::user()->user_firstName}}</p>
              </div>
              <div class="col">
                <b><label>Nationality</label></b>
                <p>{{$userPersonalDetails->nationality}}</p>
              </div>
            </div>
             <div class="row">
              <div class="col">
                <b><label>Last Name</label></b>
                <p>{{Auth::user()->user_lastName}}</p>
              </div>
              <div class="col">
                <b><label>National ID Number</label></b>
                <p>{{$userPersonalDetails->national_id_no}}</p>
              </div>
            </div>
             <div class="row">
              <div class="col">
                <b><label>Father's Name</label></b>
                <p>{{$userPersonalDetails->father_name}}</p>
              </div>
              <div class="col">
                <b><label>Passport Number</label></b>
                <p>{{$userPersonalDetails->passport_no}}</p>
              </div>
            </div>
             <div class="row">
              <div class="col">
                <b><label>Mother's Name</label></b>
                <p>{{$userPersonalDetails->mother_name}}</p>
              </div>
              <div class="col">
                <b><label>Passport Issue Date</label></b>
                <p></p>
              </div>
            </div>
             <div class="row">
              <div class="col">
                <b><label>Date of Birth</label></b>
                <p></p>
              </div>
              <div class="col">
                <b><label>Mobile Number</label></b>
                <p>{{Auth::user()->phone}}</p>
              </div>
            </div>
             <div class="row">
              <div class="col">
                <b><label>Gender</label></b>
                <p></p>
              </div>
              <div class="col">
                <b><label>Religion</label></b>
                <p>{{$userPersonalDetails->religion}}</p>
              </div>
              
            </div>
             <div class="row">
              <div class="col">
                <b><label>Matrial Status</label></b>
                <p>{{$userPersonalDetails->marital_status}}</p>
              </div>
              <div class="col">
                <b><label>Email Address</label></b>
                <p>{{Auth::user()->user_email}}</p>
              </div>
            </div>
           </div>
  	     	<form action="{{route('post.user.personaldetails')}}" method="POST" @if($userPersonalDetails != null) class="hideForm" @endif id="personalDetailsForm">
             @csrf
            <div class="row">
              <div class="col">
                <label>First Name</label>
                <input type="text" value="{{Auth::user()->user_firstName}}" name="first_name">
              </div>
              <div class="col">
                <label>Nationality</label>
                <input type="text" name="nationality" value="{{$userPersonalDetails->nationality}}" required>
              </div>
            </div>
             <div class="row">
              <div class="col">
                <label>Last Name</label>
                <input type="text" value="{{Auth::user()->user_lastName}}" name="last_name">
              </div>
              <div class="col">
                <label>National ID Number</label>
                <input type="text" value="{{$userPersonalDetails->national_id_no}}" name="nid_number">
              </div>
            </div>
             <div class="row">
              <div class="col">
                <label>Father's Name</label>
                <input type="text" value="{{$userPersonalDetails['father_name']}}" name="father_name">
              </div>
              <div class="col">
                <label>Passport Number</label>
                <input type="text" value="{{$userPersonalDetails->passport_no}}" name="passport_number">
              </div>
            </div>
             <div class="row">
              <div class="col">
                <label>Mother's Name</label>
                <input type="text" value="{{$userPersonalDetails['mother_name']}}" name="mother_name">
              </div>
              <div class="col">
                <label>Passport Issue Date</label>
                <input type="text" name="passport_issue_date">
              </div>
            </div>
             <div class="row">
              <div class="col">
                <label>Date of Birth</label>
                <input type="text"  name="birth_date">
              </div>
              <div class="col">
                <label>Mobile Number</label>
                <input type="text" value="{{Auth::user()->user_phone}}" name="mobile_number">
              </div>
            </div>
             <div class="row">
              <div class="col">
                <label>Gender</label>
                <input type="text"  name="gender">
              </div>
              <div class="col">
                <label>Religion</label>
                <input type="text"value="{{$userPersonalDetails['religion']}}" name="religion">
              </div>
              
            </div>
             <div class="row">
              <div class="col">
                <label>Matrial Status</label>
                <input type="text"value="{{$userPersonalDetails['marital_status']}}" name="maritial_status">
              </div>
              <div class="col">
                <label>Email Address</label>
                <input type="text" value="{{Auth::user()->user_email}}" name="email">
              </div>
            </div>
            <div class="row mt-4 save-clear">
              <div class="col">
                <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
                <input type="reset" class="btn btn-danger personalDetailsFormClose" value="Close" style="background: #1b3959;border: 0px;">
              </div>
            </div>


          </form>
  	     </div>
       </div>
     </div>
      <!--==============Address Details============-->
      <div class="filterDiv personal-info mt-3">
         <div class="card-header headbg2">
             <h6 class="mb-0">
              <div data-toggle="collapse" href="#collapse12">
              <span><i class="fab fa-youtube"></i>Address Details</span>
              </div>
          </h6>
         </div>
          <div id="collapse12" class="collapse" data-parent="#accordin1">
         <div class="card-body">
          @if($userAddressDetails != null)
            <div class="row addressDetails">
              <div class="col">
                <h4>Present Address :</h4>
                <p>{{$userAddressDetails->present_address}}</p>
              </div>
              <div class="col">
                <h4>Permanent Address : </h4>
                <p>{{$userAddressDetails->permanent_address}}</p>
              </div>
              <div class="col-sm-2">
                <button class="btn btn-primary" id="addressEdit">Edit</button>
              </div>
            </div> <br>
          
          <form action="{{route('post.user.addressdetails')}}" @if($userAddressDetails != null) class="hideForm" @endif id="addressForm" method="POST">
            @csrf
            <div class="row">
              <div class="col">
                <label>Present Address</label>
              </div>
              <div class="col">
                <label>Permanent Address</label>
                   <input type="checkbox" name="" style="margin-left: 41px;">
                <label>Same as Present Address</label>
               </div>
            </div>
              <div class="row">
                <div class="col col1">
                  <input type="radio" name="">
                  <label>Inside Bangladesh</label>
                  <input type="radio" name="">
                  <label>Outsite Bangladesh</label>
                </div>
                  <div class="col col1">
                  <input type="radio" name="">
                  <label>Inside Bangladesh</label>
                  <input type="radio" name="">
                  <label>Outsite Bangladesh</label>
                </div>

            </div>
            <div class="row mt-3">
              <div class="col col1">
                  <select name="present_district" id="">
                    <option value="">District</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Bagerhat">Bagerhat</option>
                    <option value="Cumilla">Cumilla</option>
                  </select>
              </div>
               <div class="col col1">
                     <select name="present_thana" id="">
                    <option value="">Thana</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khilkhet">Khailkhet</option>
                    <option value="Banani">Banani</option>
                    <option value="Khilgaon">Khilgaon</option>
                  </select>
              </div>
              <div class="col col1">
                     <select name="present_postOffice" id="">
                    <option selected>Post Office</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
              </div>
              <div class="col col1">
                  <select name="permanent_district" id="">
                    <option selected>District</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                 <div class="col col1">
                     <select name="permanent_thana" id="">
                    <option selected>Thana</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col col1">
                     <select name="permanent_postOffice" id="">
                    <option selected>Post Office</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
              </div>

            </div>
                <div class="row mt-3">
              <div class="col">
               
                <input type="text" name=" present_address" placeholder="Type your house no/ Road/ Village">
              </div>
              <div class="col">
                
                <input type="text" name="permanent_address" placeholder="Type your house no/Road/ Village">
              </div>
            </div>
        
             
            <div class="row mt-4 save-clear">
              <div class="col">
                <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
                <input type="reset" class="btn btn-danger closebutton" value="Close" style="background: #1b3959;border: 0px;">
              </div>
            </div>


          </form>
          @endif
         </div>
       </div>
     </div>
       <!--==============Carrer And Application Information============-->
       <div class="filterDiv personal-info mt-3">
         <div class="card-header headbg2">
               <h6 class="mb-0">
              <div data-toggle="collapse" href="#collapse13">
                  <span><i class="fab fa-youtube"></i>Carrer And Application Information</span>
              </div>
          </h6>
         </div>
  <div id="collapse13" class="collapse" data-parent="#accordin1">
         <div class="card-body">
         @if($userCareerInfo != null)
            <div class="row careerInfo">
              <div class="col">
                <h4>Objective :</h4>
                <p>{{$userCareerInfo->objective}}</p>
              </div>
              
              <div class="col-sm-2">
                <button class="btn btn-primary" id="careerInfoEdit">Edit</button>
              </div>
            </div> <br>
            <div class="row careerInfo">
              <div class="col">
                <h4>Present Salary : </h4>
                  <p>{{$userCareerInfo->present_salary}}</p>
              </div>
              <div class="col">
                <h4>Expected Salary : </h4>
                <p>{{$userCareerInfo->expected_salary}}</p>
              </div>
            </div>
             <br>
          <form action="{{ route('post.user.applicationinfo') }}" class="hideForm" method="POST" id="careerInfoForm"> 
            @csrf
            <div class="row">
              <div class="col">
              
                    <label for="">Objective</label>
                    <textarea name="objective" type="text" rows="3" required></textarea>
                  
              </div>
            </div>
            <div class="row">
              <div class="col">
               <label for="">Present Sallary</label>
                <input type="text" name="present_salary" placeholder="0" required>
                <small style="font-style:italic; color: #C6C6C5;">TK/Month</small>
              </div>
              <div class="col">
                 <label for="">Expected Sallary</label>
                <input type="text" name="expected_salary" placeholder="0" required>
                 <small style="font-style:italic; color: #C6C6C5;">TK/Month</small>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Looking for (Job Lavel)</label>
              </div>
              <div class="col">
                <label>Available for (Job Nature)</label>
               </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="radio" id="entry" name="looking_for" value="Entry Level">
                <label> Entry Lavel</label>
                 <input type="radio" id="mid" name="looking_for" value="Mid Level">
                <label> Mid Lavel</label>
                 <input type="radio" id="top" name="looking_for" value="Top Level">
                <label> Top Lavel</label>
              </div>
              <div class="col">
              <input type="radio" id="fulltime" name="available_for" value="Full Time">
                <label> Full Time</label>
                 <input type="radio" id="parttime" name="available_for" value="Part Time">
                <label> Part Time</label>
                 <input type="radio" id="contact" name="available_for" value="Contact">
                <label> Contact</label>
               </div>
            </div>
        
             
            <div class="row mt-3 save-clear">
              <div class="col">
                <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
                <input type="reset" class="btn btn-danger closeCareerInfo" value="Close" style="background: #1b3959;border: 0px;">
              </div>
            </div>


          </form>
         </div>
         @endif
       </div>
     </div>
        <!--==============Preferred Areas============-->
      <div class="filterDiv personal-info mt-3">
         <div class="card-header headbg2">
            <h6 class="mb-0">
              <div data-toggle="collapse" href="#collapse14">
                  <span><i class="fab fa-youtube"></i>Preferred Areas</span>
              </div>
          </h6>
         </div>
         <div id="collapse14" class="collapse" data-parent="#accordin1">
         <div class="card-body">
          <form>
            <div class="row">
              <div class="col">
                 <div class="form-group">
                    <h5 style="color: #838383;">Preferred job categories</h5>
                     <p style="font-size: 14px;color: #838383;">Preferred job categories represents your desired sector(s) to work (at least 1 category any of section)</p>
                  </div>
              </div>
            </div>
        
            <div class="row">
              <div class="col">
                <label>Functional (max 3)</label>
                <select class="custom-select" size="4">
                  <option  value="1">One</option>
                  <option  value="2">Two</option>
                  <option  value="3">Three</option>
                   <option  value="1">One</option>
                  <option  value="2">Two</option>
                  <option  value="3">Three</option>
                </select>
              </div>
              <div class="col">
                <label>Special Skills (max 3)</label>
                 <select class="custom-select" size="4">
                  <option  value="1">One</option>
                  <option  value="2">Two</option>
                  <option  value="3">Three</option>
                   <option  value="1">One</option>
                  <option  value="2">Two</option>
                  <option  value="3">Three</option>
                </select>
               </div>
            </div>
              <div class="row mt-3">
              <div class="col">
                 <div class="form-group">
                    <h5 style="color: #838383;">Preferred Job Location </h5>
                     <p style="font-size: 14px;color: #838383;">Preferred Job Location defines the <strong> geographical place</strong> where you prefer to work</p>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                <label for="">Inside Bangladesh: Districts (max 15)</label>
                <input type="text" id="" placeholder="Add District">

                 <label for="">Outside Bangladesh: Countries (max 10)</label>
                <input type="text" id="" placeholder="Add Country">

                 <label for="">Add Your Preferred Organization Type (max 10)</label>
                <input type="text" id="" placeholder="Add Organization Type">
              </div>
            </div>
          </div>
      
        
             
            <div class="row mt-3 save-clear">
              <div class="col">
                <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
                <input type="reset" class="btn btn-danger" value="Close" style="background: #1b3959;border: 0px;">
              </div>
            </div>


          </form>
         </div>
       </div>
     </div>
         <!--==============Other Relevent Information============-->
     <div class="filterDiv personal-info mt-3">
         <div class="card-header headbg2">
          <h6  class="mb-0">
            <div data-toggle="collapse" href="#collapse15">
           <span><i class="fab fa-youtube"></i>Other Relevent Information</span>
         </div>
       </h6>
     </div>
         <div id="collapse15" class="collapse" data-parent="#accordin1">
         <div class="card-body">
          <form>
                 <div class="row">
              <div class="col">
                 <div class="form-group">
                    <label for="">Career Summary</label>
                    <textarea class="form-control" id="" rows="3"></textarea>
                  </div>
              </div>
            </div>
                 <div class="row">
              <div class="col">
                 <div class="form-group">
                    <label for="">Special Qualification</label>
                    <textarea class="form-control" id="" rows="3"></textarea>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                <label for="">Keywords</label>
                <input type="text" id="" placeholder="Add District">
              </div>
            </div>
          </div>
      
        
             
            <div class="row mt-3 save-clear">
              <div class="col">
                <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
                <input type="reset" class="btn btn-danger" value="Close" style="background: #1b3959;border: 0px;">
              </div>
            </div>


          </form>
         </div>
       </div>
     </div>
     <!--==============Other Relevent Information End============-->
   </div>

 <!--==============Education Info============-->
<div id="accordin2" role="tablist">
   <div class="filterDiv education-info mt-3">
       <div class="card-header headbg2">
         <h6 class="mb-0">
            <div data-toggle="collapse" href="#collapse21">
              <span><i class="fab fa-youtube"></i>Academic 1</span>
            </div>
         </h6>
       </div>
       <div id="collapse21" class="collapse show" data-parent="#accordin2">
       <div class="card-body" id="eduCard">
        <form id="eduForm">
            <div class="row">
              <div class="col">
                <p class="mb-2">Academic 1</p>
                 <label>Level of Education</label>
                 <select class="" id=" my-selecticon">
                    <option>Select</option>
                    <option  value="1">One</option>
                    <option  value="2">Two</option>
                    <option  value="3">Three</option>
                </select>
                 <input type="checkbox" name="">
                 <small class="mt-2" style="color: #666666;">Show this degree in summary view at employer's end</small>

                <label>Exam/Degree Title</label>
                 <select class="" id=" my-selecticon">
                    <option>Select</option>
                    <option  value="1">One</option>
                    <option  value="2">Two</option>
                </select>

                 <label>Concentration / Major / Group</label>
                 <select class="" id=" my-selecticon">
                    <option>Select</option>
                    <option  value="1">One</option>
                    <option  value="2">Two</option>
                    <option  value="3">Three</option>
                </select>

                 <label>Board</label>
                 <select class="" id=" my-selecticon">
                    <option>Select</option>
                    <option  value="1">One</option>
                    <option  value="2">Two</option>
                    <option  value="3">Three</option>
                </select>

                 <label>Institute Name</label>
               
                  <input type="text" name="">
                  <input type="checkbox" name="">
                    <small class="mt-2" style="color: #666666;">This is a foregin institute </small><br>
            
                 <label>Achievement</label>
                 <input type="text" name="">

               <div class="save-clear">
                 <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
                 <input type="reset" class="btn btn-danger" value="Close" style="background: #1b3959;border: 0px;">
              </div>

               

              </div>
              <div class="col mt-4">
                
                 <label>Result</label>
                 <select class="" id=" my-selecticon">
                    <option>Select</option>
                    <option  value="1">One</option>
                    <option  value="2">Two</option>
                    <option  value="3">Three</option>
                </select>

                 <label class="mt-3">Passing Year</label>
                 <select class="" id=" my-selecticon">
                    <option>Select</option>
                    <option  value="1">One</option>
                    <option  value="2">Two</option>
                    <option  value="3">Three</option>
                </select>
               
                   <label>Duration (years)</label>
                   <input type="text" name="">
                 

              </div>
            </div>
         </form>
         <div class="new_edu_form">
         
         </div>
          <div class="all-requirment">
            <span id="addEdu"><i class="fas fa-plus-circle"></i>Add Education (If Required)</span>
          </div>
       </div>
   </div>
</div>
 <!--==============Traning summery============-->
 <div class="filterDiv education-info mt-3">
       <div class="card-header headbg2">
         <h6 class="mb-0">
            <div data-toggle="collapse" href="#collapse22">
              <span><i class="fab fa-youtube"></i>Training Summary</span>
            </div>
         </h6>
       </div>
       <div id="collapse22" class="collapse" data-parent="#accordin2">
       <div class="card-body">
        
         
         @foreach($userTrainingInfos as $uti)
         <div class="row trainingDetails">     
         <div class="col">
                <div class="traning">
                 <label><h4>Training  Title</h4></label>
                 <p style="margin-top:-25px; margin-bottom:5px;">{{$uti['training_title']}}</p>
              
                 <label><h4>Topics Covered</h4></label>
                 <p style="margin-top:-25px; margin-bottom:5px;">{{$uti['topics_covered']}}</p>

                  <label><h4>Institute</h4></label>
                    <p style="margin-top:-25px; margin-bottom:5px;">{{$uti['institute_name']}}</p>
                  <label><h4>Location</h4></label>
                    <p style="margin-top:-25px; margin-bottom:5px;">{{$uti['location']}}</p>
               </div>
               

               

              </div>
              <div class="col">
               
                  <label><h4>Country</h4></label>
                    <p style="margin-top:-25px; margin-bottom:5px;">{{$uti['country']}}</p>
                  <label><h4>Traning year</h4></label>
                    <p style="margin-top:-25px; margin-bottom:5px;">{{$uti['training_year']}}</p>
                  <label><h4>Duration</h4></label>
                    <p style="margin-top:-25px; margin-bottom:5px;">{{$uti['duration']}}</p>
                
              </div>
              <div class="col-sm-2 float-right">
                <button class="btn btn-primary btn-sm"  id="trainingEdit" data-id ="{{$uti['id']}}"
                                                                          data-training_title="{{$uti['training_title']}}"
                                                                          data-topic_covered="{{$uti['topics_covered']}}"
                                                                          data-institute_name="{{$uti['institute_name']}}"
                                                                          data-location="{{$uti['location']}}"
                                                                          data-country="{{$uti['country']}}"
                                                                          data-training_year="{{$uti['training_year']}}"
                                                                          data-duration="{{$uti['duration']}}"
                                                                          >Edit</button>
                <button class="btn btn-danger btn-sm"  id="">Delete</button>
              </div>
              
         </div> <hr>
         @endforeach
         
        <form action="{{route('post.user.trainingsummary')}}" method="POST"@if($userTrainingInfos != null) class="hideForm" @endif id="trainingForm">
        @csrf
            <div class="row" id="trainingForm">
              <div class="col">
                <div class="traning">
                 <label>Training  Title</label>
                 <input type="text" id="trainingTitle" name="training_title[]">
              
                 <label>Topics Covered</label>
                 <input type="text" id="topicCovered" name="topic[]">

                  <label>Institute</label>
                 <input type="text" id="instituteName" name="institute_name[]">

                  <label>Location</label>
                 <input type="text" id="instituteLocation"  name="institute_location[]">
  
               </div>
               

               

              </div>
              <div class="col">
               
                   <label>Country</label>
                   <input type="text" id="country" name="country[]">

                  <label>Traning year</label>
                  <select class="" name="training_year[]" id="trainingYear">
                    <option>Year</option>
                    <option  value="1990">1990</option>
                    <option  value="1991">1991</option>
                    <option  value="1992">1992</option>
                    <option  value="1993">1993</option>
                    <option  value="1994">1994</option>
                    <option  value="1995">1995</option>
                    <option  value="1996">1996</option>
                    <option  value="1997">1997</option>
                    <option  value="1998">1998</option>
                    <option  value="1999">1999</option>
                    <option  value="2000">2000</option>
                    <option  value="2001">2001</option>
                    <option  value="2002">2002</option>
                    <option  value="2003">2003</option>
                    <option  value="2004">2004</option>
                    <option  value="2005">2005</option>
                    <option  value="2006">2006</option>
                    <option  value="2007">2007</option>
                    <option  value="2008">2008</option>
                    <option  value="2009">2009</option>
                    <option  value="2010">2010</option>
                    <option  value="2011">2011</option>
                    <option  value="2012">2012</option>
                    <option  value="2013">2013</option>
                    <option  value="2014">2014</option>
                    <option  value="2015">2015</option>
                    <option  value="2016">2016</option>
                    <option  value="2017">2017</option>
                    <option  value="2018">2018</option>
                    <option  value="2019">2019</option>
                    <option  value="2020">2020</option>
                    <option  value="2021">2021</option>
                    <option  value="2022">2022</option>
                    <option  value="2023">2023</option>
                </select>

                    <label>Duration</label>
                   <input type="text" id="duration" name="duration[]">
                
                
              </div>
              
            </div>
            <div class="trainingsummary">
            </div>
            <div class="save-clear">
                 <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
                 <input type="reset" class="btn btn-danger trainingFormClose" value="Close" style="background: #1b3959;border: 0px;">
            </div>
         </form>
         
          <div class="all-requirment">
            <span id="addTraining"><i class="fas fa-plus-circle" ></i>Add Training (If Required)</span>
          </div>
         
       </div>
      
   </div>
</div>
 <!--==============Professional Qualification============-->

 <div class="filterDiv education-info mt-3">
       <div class="card-header headbg2">
         <h6 class="mb-0">
            <div data-toggle="collapse" href="#collapse23">
              <span><i class="fab fa-youtube"></i>Professional Qualification</span>
            </div>
         </h6>
       </div>
       <div id="collapse23" class="collapse" data-parent="#accordin2">
       <div class="card-body">
        <form action="{{route('post.user.professionalqualification')}}" method="POST">
        @csrf
            <div class="row">
              <div class="col">
                <div class="traning">
                   <label>Certification</label>
                   <input type="text" name="certificate_name">
                
                   <label>Institute</label>
                   <input type="text" name="institute_name">
               </div>

               <div class="save-clear">
                 <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
                 <input type="reset" class="btn btn-danger" value="Close" style="background: #1b3959;border: 0px;">
              </div>

               <div class="all-requirment">
                 <span><i class="fas fa-plus-circle"></i>Add Education (If Required)</span>
               </div>

              </div>
              <div class="col">
               
                   <label>Location</label>
                   <input type="text" name="location">
                  <div class="row">
                    <div class="col">
                       <label>  Certification Period</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                        <input type="text" name="certification_period" placeholder="mm/dd/yyyy">
                     </div>
                       
                   </div>
              </div>
            </div>
         </form>
       </div>
   </div>
</div>

</div>

 <!--==============Employement History============-->


<div id="accordin4" role="tablist">
  <div class="filterDiv employe-info">
    <div class="card-header headbg2">
         <h6 class="mb-0">
            <div data-toggle="collapse" href="#collapse31">
              <span><i class="fab fa-youtube"></i>Employment History</span>
            </div>
         </h6>
       </div>
       <div id="collapse31" class="collapse show" data-parent="#accordin4">
        <div class="card-body">
          @foreach($userExprienceInfos as $key=> $uei)
          <div class="row mb-4 @if($key > 0) mt-3 @endif employementHistory">
              <div class="col">
                  <h4 style="display:inline;">Experience {{++$key}}</h4>
                  <form action="{{route('delete.user.employementhistory',$uei->id)}}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-sm float-right" type="submit" style="display:inline;">Delete</button>
                  </form>
                  <button class="btn btn-primary btn-sm float-right" style="display:inline;" id="employementHistoryEdit"
                                                                    data-id="{{$uei->id}}"
                                                                    data-companyName="{{$uei->company_name}}"
                                                                    data-companyBusiness="{{$uei->company_business}}"
                                                                    data-designation="{{$uei->designation}}"
                                                                    data-department="{{$uei->department}}"
                                                                    data-responsiblities="{{$uei->responsiblity}}"  
                                                                    data-companyLocation="{{$uei->company_location}}"
                                                                    data-employementFrom="{{$uei->employment_period_from}}"
                                                                    data-employementTo="{{$uei->employment_period_to}}"
                                                                    >Edit</button>
                  
              </div>
            </div>
            <div class="row employementHistory">
              <div class="col">
                  <b><label>Company Name</label></b>
                  <p>{{$uei->company_name}}</p>

                    <b><label>Company Busineass</label></b>
                  <p>{{$uei->company_business}}</p>

                    <b><label>Designation</label></b>
                  <p>{{$uei->designation}}</p>

                    <b><label>Department</label></b>
                  <p>{{$uei->department}}</p>

                    <!-- <b><label class="mb-0">Area of Experiences: </label><b><br>
                    <small >Add your expertise skill (max 3)</small>
                  <p></p> -->

              

            
              </div>
              <div class="col">
                <b><label>Responsibilities</label></b>
                  <p>{{$uei->responsiblity}}</p>

                  <b><label>Company Location</label></b>
                  <p>{{$uei->company_location}}</p>
                    
                <div class="row">
                  <div class="col">
                      <b><label>Employment Period</label></b>
                      <p>{{$uei->employment_period_from}} - {{$uei->employment_period_to}}</p>
                  </div>
                </div>
                
              </div>
          </div>
          @endforeach

          <form action="{{route('post.user.employementhistory')}}" @if($userExprienceInfos != null) class="hideForm" @endif method="POST" id="employementHistoryForm">
          @csrf
            <input type="hidden" name="employement_id" id="employeID">
            <div class="row">
              <div class="col">
                  <label>Company Name</label>
                  <input type="text" id="eCompanyName" name="company_name">

                    <label>Company Busineass</label>
                  <input type="text" id="eCompanyBusiness" name="company_business">

                    <label>Designation</label>
                  <input type="text" id="eDesignation" name="designation">

                    <label>Department</label>
                  <input type="text" id="eDepartment" name="department">

                    <label class="mb-0">Area of Experiences: </label><br>
                    <small >Add your expertise skill (max 3)</small>
                  <input type="text" name="">

              <div class="save-clear">
              <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
              <input type="reset" class="btn btn-danger employementFormClose" value="Close" style="background: #1b3959;border: 0px;">
            </div>

            
          </div>
              <div class="col">
                <label>Responsibilities</label>
                <textarea name="responsiblities"  id="eResponsiblities" rows="3"></textarea>

                  <label>Company Location</label>
                  <input type="text" name="company_location" id="eCompanyLocation">
                    
                <div class="row">
                  <div class="col">
                      <label>Employment Period</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                      <input type="text" name="employement_period_form" id="employePeriodFrom" placeholder="From">
                  </div>
                    <div class="col">
                      <input type="text" name="employement_period_to" id="employePeriodTo" placeholder="To">
                  </div>
                </div>
            </div>
          </div>

                                                            </form>
            <div class="all-requirment" id="addEmployementForm">
              <span><i class="fas fa-plus-circle"></i>Add Employement (If Required)</span>
            </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div> 
                                                  <!--==============Employement History============-->
                                                  <div id="accordin5" role="tablist">
                                                    <div class="filterDiv othder-info">
                                                          <div class="card-header headbg2">
                                                          <h6 class="mb-0">
            <div data-toggle="collapse" href="#collapse51">
              <span><i class="fab fa-youtube"></i>Specialization</span>
            </div>
         </h6>
       </div>
        <div id="collapse51" class="collapse show" data-parent="#accordin5">
          <div class="card-body">
             <form action="{{route('post.user.specilization')}}" method="POST">
             @csrf
                  <div class="row">
                    <div class="col">
                        <div class="skill-1 mb-2" >
                             <p style="font-weight:bold; color: #464747;">Skill - 1</p>
                        </div>
                        <div class="skill-input">
                          <label>Skill</label>
                          <input type="text" name="skill" placeholder="Add more..">

                          <p class="mt-3 mb-2">How did you learn the skill?</p>
                           <input type="checkbox" value="Self" id="self" name="learned_how">
                           <label>Self</label>
                           <input type="checkbox" value="Job" id="job" name="learned_how">
                           <label>Job</label>
                           <input type="checkbox" value="Educational" id="educational" name="learned_how">
                           <label>Educational </label>
                           <input type="checkbox" value="Professional Training" id="professional_training" name="learned_how">
                           <label>Professional Training </label>
                           <br>

                           <label>Skill Description</label>
                           <textarea name="skill_description" id="" rows="3">
                             
                           </textarea>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="save-clear">
                         <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
                         <input type="reset" class="btn btn-danger" value="Close" style="background: #1b3959;border: 0px;">
                      </div>

                      <div class="all-requirment">
                        <span><i class="fas fa-plus-circle"></i>Add Education (If Required)</span>
                      </div>

                   </div>
                   <div class="col"></div>
                  </div>
             </form>
          </div>
        </div>
  </div>
   <!--==============Employement History->langauge profiency============-->
  <div class="filterDiv othder-info">
        <div class="card-header headbg2">
         <h6 class="mb-0">
            <div data-toggle="collapse" href="#collapse52">
              <span><i class="fab fa-youtube"></i>Language  Proficiency</span>
            </div>
         </h6>
       </div>
        <div id="collapse52" class="collapse show" data-parent="#accordin5">
          <div class="card-body">
             <form action="{{route('post.user.languageproficiency')}}" method="POST">
             @csrf
              <div class="row">
                <div class="col">
                      <div class="lang-1 mb-2" >
                       <p style="font-weight:bold; color: #464747;">Language - 1</p>
                     </div>
                </div>
              </div>
                  <div class="row">
                    <div class="col">
                        <div class="lang-input">
                          <label>Language </label>
                          <input type="text" name="language">

                          <label>Writing </label>
                          <input type="text" name="writing">
                        </div>
                          <div class="save-clear">
                         <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
                         <input type="reset" class="btn btn-danger" value="Close" style="background: #1b3959;border: 0px;">
                      </div>

                      <div class="all-requirment">
                        <span><i class="fas fa-plus-circle"></i>Add Education (If Required)</span>
                      </div>
                    </div>
                     <div class="col">
                            <div class="lang-input">
                          <label>Reading </label>
                          <input type="text" name="reading">

                          <label>Specking </label>
                          <input type="text" name="speaking">
                        </div>
                     </div>


                  </div>
                
             </form>
          </div>
        </div>
  </div>
   <!--==============Employement History->Reference============-->

<div class="filterDiv othder-info">
        <div class="card-header headbg2">
         <h6 class="mb-0">
            <div data-toggle="collapse" href="#collapse53">
              <span><i class="fab fa-youtube"></i>Reference</span>
            </div>
         </h6>
       </div>
        <div id="collapse53" class="collapse show" data-parent="#accordin5">
          <div class="card-body">
             <form action="{{route('post.user.reference')}}" method="POST">
             @csrf
              <div class="row">
                <div class="col">
                      <div class="lang-1 mb-2" >
                       <p style="font-weight:bold; color: #464747;">Reference - 1</p>
                     </div>
                </div>
              </div>
                  <div class="row">
                    <div class="col">
                        <div class="lang-input">
                          <label>Name  </label>
                          <input type="text" name="referal_name">

                          <label>Designation  </label>
                          <input type="text" name="designation">

                          <label>Mobile</label>
                          <input type="text" name="mobile">

                          <label>Email</label>
                          <input type="text" name="email">

                          <label>Relation </label>
                          <select name="relation">
                            <option>Select</option>
                            <option value="Relative">Relative</option>
                            <option value="Professional">Professional</option>
                            <option value="Family Friend">Family Friend</option>
                            <option value="Academic">Academic</option>
                          </select>
                        </div>
                          <div class="save-clear">
                             <input type="submit" class="btn btn-success" value="Save" style="background: #f7941d;border: 0px;">
                             <input type="reset" class="btn btn-danger" value="Close" style="background: #1b3959;border: 0px;">
                         </div>

                      <div class="all-requirment">
                           <span><i class="fas fa-plus-circle"></i>Add Education (If Required)</span>
                      </div>
                    </div>
                     <div class="col">
                            <div class="lang-input">
                          <label>Organization</label>
                          <input type="text" name="organization">

                          <label>Phone ( Off ) </label>
                          <input type="text" name="">

                          <label>Phone ( Res ) </label>
                          <input type="text" name="">

                          <label>Address</label>
                          <textarea name="address" rows="2"></textarea>
                        </div>
                     </div>


                  </div>
                
             </form>
          </div>
        </div>
  </div>


</div>


   <!--==============Employement History============-->

 <div id="accordin6" role="tablist">  
   <div class="filterDiv photo-info">
      <div class="card-header headbg2">
         <h6 class="mb-0">
            <div data-toggle="collapse" href="#collapse61">
              <span><i class="fab fa-youtube"></i>Reference</span>
            </div>
         </h6>
       </div>
         <div id="collapse61" class="collapse show" data-parent="#accordin6">
          <div class="card-body">
            <div class="photograhy text-center">
              <a href=""><i class="fa fa-user"></i></a>
            </div>
            <div class="text-photo">
                 <p class="text-center">You don't have any photo, Please upload photo</p>
            </div>
                 <form class="form-inline mt-3">
                        <input type="file" name=""><span class="ml-3 mr-3 mt-2 mb-2">or</span>
                          <div class="input-group mb-2 mr-sm-2">
                             <div class="input-group-prepend">
                              <div class="input-group-text">G</div>
                            </div>
                             <input type="text" class="form-control" id="" placeholder="Use Google Photo">
                         </div>
                  </form>
                  <form>
                    <div class="upload-photo-text text-center mt-4 mb-4">
                          <span>
                            <i class="fa fa-upload" aria-hidden="true"></i>
                                   Upload Photo</span>
                      </div>
                  </form>
          </div>
        </div>
  </div>
</div>

</div>
 </div>
 </div>
</div>

    
	</div>
	</div>
</div>
</div>
</div>



<!--Resume-->

@endsection

@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{asset('js/jquery.rcounter.js')}}"></script>
<script src="{{asset('/js/custom.js')}}"></script>

    <script>
    function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<script>
$(document).on('click','#addEdu',function(){
  //$('#eduForm').clone().append('#eduCard');
      var button = $('#eduForm').clone();
			//button.find('input').val('');
			button.attr('id', '');
			button.insertBefore('.new_edu_form');
})

$(document).on('click','#addTraining',function(){
  //$('#eduForm').clone().append('#eduCard');
      var button = $('#trainingForm').clone();
			//button.find('input').val('');
			button.attr('id', '');
			button.insertBefore('.trainingsummary');
})

$(document).on('click','#personalDetailsEdit',function(){
  $('#personalDetailsForm').toggle('.hideForm');
  $('.personalDetails').toggle('.hideForm');
  //$('#addEmployementForm').toggle('.hideForm');

  //  var id = $(this).attr("data-id");
  //  var eCompanyName = $(this).attr("data-companyName");
  //  var eCompanyBusiness= $(this).attr("data-companyBusiness");
  //  var eDesignation = $(this).attr("data-designation");
  //  var eDepartment = $(this).attr("data-department");
  //  var eResponsiblities = $(this).attr("data-responsiblities");
  //  var eCompanyLocation = $(this).attr("data-companyLocation");
  //  var employementFrom = $(this).attr("data-employementFrom");
  //  var employementTo = $(this).attr("data-employementTo");

  //  $('#employeID').val(id);
  //  $('#eCompanyName').val(eCompanyName);
  //  $('#eCompanyBusiness').val(eCompanyBusiness);
  //  $('#eDesignation').val(eDesignation);
  //  $('#eDepartment').val(eDepartment);
  //  $('#eResponsiblities').val(eResponsiblities);
  //  $('#eCompanyLocation').val(eCompanyLocation);
  //  $('#employePeriodFrom').val(employementFrom);
  //  $('#employePeriodTo').val(employementTo);

  
})

$(document).on('click','.personalDetailsFormClose',function(){
  $('#personalDetailsForm').toggle('.hideForm');
  $('.personalDetails').toggle('.hideForm');
  //$('#addEmployementForm').toggle('.hideForm');
})

$(document).on('click','#addressEdit',function(){
  $('#addressForm').toggle('.hideForm');
  $('.addressDetails').toggle('.hideForm');
})

$(document).on('click','.closebutton',function(){
  $('#addressForm').toggle('.hideForm');
  $('.addressDetails').toggle('.hideForm');
});

$(document).on('click','#careerInfoEdit',function(){
  $('#careerInfoForm').toggle('.hideForm');
  $('.careerInfo').toggle('.hideForm');
})

$(document).on('click','.closeCareerInfo',function(){
  $('#careerInfoForm').toggle('.hideForm');
  $('.careerInfo').toggle('.hideForm');
})

$(document).on('click','#trainingEdit',function(){
  $('#trainingForm').toggle('.hideForm');
  $('.trainingDetails').toggle('.hideForm');

  var id = $(this).attr("data-id");
  var trainingTitle = $(this).attr("data-training_title");
  var topicCovered = $(this).attr("data-topic_covered");
  var instituteName = $(this).attr("data-institute_name");
  var location = $(this).attr("data-location");
  var country = $(this).attr("data-country");
  var trainingYear = $(this).attr("data-training_year");
  var duration = $(this).attr("data-duration");


  $('#trainingTitle').val(trainingTitle);
  $('#topicCovered').val(topicCovered);
  $('#instituteName').val(instituteName);
  $('#instituteLocation').val(location);
  $('#country').val(country);
  $('#trainingYear').val(trainingYear);
  $('#duration').val(duration);

  
})

$(document).on('click','.trainingFormClose',function(){
  $('#trainingForm').toggle('.hideForm');
  $('.trainingDetails').toggle('.hideForm');
})

$(document).on('click','#employementHistoryEdit',function(){
  $('#employementHistoryForm').toggle('.hideForm');
  $('.employementHistory').toggle('.hideForm');
  $('#addEmployementForm').toggle('.hideForm');

   var id = $(this).attr("data-id");
   var eCompanyName = $(this).attr("data-companyName");
   var eCompanyBusiness= $(this).attr("data-companyBusiness");
   var eDesignation = $(this).attr("data-designation");
   var eDepartment = $(this).attr("data-department");
   var eResponsiblities = $(this).attr("data-responsiblities");
   var eCompanyLocation = $(this).attr("data-companyLocation");
   var employementFrom = $(this).attr("data-employementFrom");
   var employementTo = $(this).attr("data-employementTo");

   $('#employeID').val(id);
   $('#eCompanyName').val(eCompanyName);
   $('#eCompanyBusiness').val(eCompanyBusiness);
   $('#eDesignation').val(eDesignation);
   $('#eDepartment').val(eDepartment);
   $('#eResponsiblities').val(eResponsiblities);
   $('#eCompanyLocation').val(eCompanyLocation);
   $('#employePeriodFrom').val(employementFrom);
   $('#employePeriodTo').val(employementTo);

  
})

$(document).on('click','.employementFormClose',function(){
  $('#employementHistoryForm').toggle('.hideForm');
  $('.employementHistory').toggle('.hideForm');
  $('#addEmployementForm').toggle('.hideForm');
})

$(document).on('click','#addEmployementForm',function(){
  $('#employeID').val('');
  $('#employementHistoryForm').toggle('.hideForm');
  $('.employementHistory').toggle('.hideForm')
})
</script>

@endsection