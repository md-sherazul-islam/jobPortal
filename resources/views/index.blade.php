@extends('layouts.master')
@section('contentSection')
    <!--================Home Banner Area =====================-->
 <section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
      	<div class="container">
	        <div class="banner_content row">
	          	<div class="col-lg-7 col-md-7  ">
		            <div class="text_r">
				     	<h2 class="display-5">Find The New Job</h2>
				    </div>
	               	<div class="form-group form-inline searchform">
				     	<input type="text" class="form-control input-icon"  name="" placeholder="lorm ipsum">
				     	<select class="form-control sicon">
				     		 <option>Organization</option>
				     		 <option id="one" value="1">Organization</option>
				     		 <option id="one" value="2">Organization</option>
				     		 <option id="one" value="3">Organization</option>
				     	</select>
				     	<input type="submit" class="form-control" name=""
				     	   value="search">
			    	</div>
			        <div class="counter">
			     		<div class="count">
			     		 	<img src="images/count1.jpg" class="image-fluid" alt="Live job">
			     		 	<h3>Live Jobs</h3>
			     		 	<span class="countup">12,3456</span>
			     		</div>
			     		<div class="count">
			     		 	 <img src="images/count2.jpg" class="image-fluid" alt="Live job">
			     		 	 <h3>Companies</h3>
			     		 	 <span class="countup">12,3456</span>
			     		</div>
			     		<div class="count">
			     		 	  <img src="images/count3.jpg" class="image-fluid" alt="Live job">
			     		 	  <h3>New Jobs</h3>
			     		 	  <span class="countup">12,3456</span>
			     		</div>
			     	</div>
	            </div><!--col-lg-7 col-md-7 -->
	           	<div class="col-lg-5 col-md-5">
		             <div class="banner-right">
		                <div class="banner-text ">
		                     <h2 class="display-5 ">Jobs in your Area</h2>
		                </div>
		                <div class="banner-img">
		                  	<div id="myDIV">
		                     <div class="row">
		                     	<div class="district-rangpur btn1">
		                     		<a href="#">Rangpur</a>
		                     	</div>
		                     </div>
		                     <div class="row">
		                     	<div class="district-rajshahi btn1">
		                     		<a href="#">Rajshahi</a>
		                     	</div>
		                     	<div class="district-mymensingh btn1">
		                     		<a href="#">Mymensingh</a>
		                     	</div>
		                     	<div class="district-sylhet btn1">
		                     		<a href="#">Sylhet</a>
		                     	</div>
		                     </div>
		                     <div class="row">
		                     		<div class="district-dhaka btn1 active ">
		                     		<a href="#">dhaka</a>
		                     	</div>
		                     </div>
		                        <div class="row">
		                     		<div class="district-khulna btn1">
		                     		<a href="#">Khulna</a>
			                     	</div>
			                     	<div class="district-barisal btn1">
			                     		<a href="#"> Barisal</a>
			                     	</div>
			                     	<div class="district-chittagong btn1">
			                     		<a href="#">Chittagong</a>
			                     	</div>
			                    </div>
		                     
		                 	</div><!--myDiv -->
		            	</div><!--banner image -->
		            </div><!--banner right -->	              
	          	</div><!--col-lg-5 col-md-5 -->
	        </div><!--banner content row -->
      	</div><!--container-->
    </div>
 </section>
<!--================End Home Banner Area =================-->

<!--Feature jobs-->
<div id="feature">
	<div class="container">
		 <div class="row text-center mt-4">
		 	  <div class=" col-lg-12 col-md-12">
		 	  	<div class="job-intern">
		 	  	  <span id="three">Intern Job</span>
		 	  	</div>
		 	  </div>
		 </div>
    <div class="category-job">
		 <div class="row">
		 	<div class=" col-lg-3 col-md-3 col-sm-6 col-xs-12   border1 shado">
		 		<img src="images/jobs/1.png" class="image-fluid my-img">
					<p class="text">SBT Japan Limited </p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    	<i class="fa fa-caret-right my-icon" aria-hidden="true"></i>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6  col-xs-12 border1 shado">
		 		<img src="images/jobs/2.png" class="image-fluid my-img">
					<p class="text">MindTree</p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                    </ul>
		 	  </div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 border1 shado">
		 		<img src="images/jobs/3.png" class="image-fluid my-img">
					<p class="text">SOS Children’s Village International in Bangladesh</p>
                    
                   <ul>
                   	    <li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                    </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6  col-xs-12 border1 shado">
		 		<img src="images/jobs/3.png" class="image-fluid my-img">
					<p class="text">SOS Children’s Village International in Bangladesh</p>
                   <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                    </ul>
		 	</div>
		 </div>

		  <div class="row">
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  border1 shado" >
		 		<img src="images/jobs/8.jpg" class="image-fluid my-img">
		 	
					<p class="text">Enterior Designer</p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Asset Developments & Holdings Ltd.</a></li>
                    	
                    </ul>
               
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  border1 shado">
		 		<img src="images/jobs/1.png" class="image-fluid my-img">
					<p class="text">SBT Japan Limited </p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    	<i class="fa fa-caret-right my-icon" aria-hidden="true"></i>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 border1 shado">
		 		 <img src="images/jobs/2.png" class="image-fluid  
		 		      my-img">
				    <p class="text">MindTree</p>
                   <ul>
                      <li><i class="fa fa-caret-right my-icon"        aria-hidden="true"></i></li>
                       <li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                  </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 border1 shado">
		 		 <img src="images/jobs/4.png" class="image-fluid my-img">
					<p class="text">SOS Children’s Village International in Bangladesh</p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                      <li><a class="link" href="jobditals.html">Senior Director</a></li>  
                      
                  </ul>
		 	</div>
		 </div>
		

        </div>
	</div>
</div>


<div id="part-time">
	<div class="container">
		 <div class="row text-center">
		 	  <div class=" col-lg-12 col-md-12">
		 	  	 <div class="job-Part_time">
		 	  	   <span id="one">Part Time Job</span>
		 	  	</div>
		 	  </div>
		 </div>
    <div class="category-job">
		 <div class="row">
		 	<div class=" col-lg-3 col-md-3 col-sm-6 col-xs-12   border1 shado">
		 		<img src="images/jobs/1.png" class="image-fluid my-img">
					<p class="text">SBT Japan Limited </p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    	<i class="fa fa-caret-right my-icon" aria-hidden="true"></i>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6  col-xs-12 border1 shado">
		 		<img src="images/jobs/2.png" class="image-fluid my-img">
					<p class="text">MindTree</p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                    </ul>
		 	  </div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 border1 shado">
		 		<img src="images/jobs/3.png" class="image-fluid my-img">
					<p class="text">SOS Children’s Village International in Bangladesh</p>
                    
                   <ul>
                   	    <li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                    </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6  col-xs-12 border1 shado">
		 		<img src="images/jobs/3.png" class="image-fluid my-img">
					<p class="text">SOS Children’s Village International in Bangladesh</p>
                   <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                    </ul>
		 	</div>
		 </div>

		  <div class="row">
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  border1 shado" >
		 		<img src="images/jobs/8.jpg" class="image-fluid my-img">
		 	
					<p class="text">Enterior Designer</p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Asset Developments & Holdings Ltd.</a></li>
                    	
                    </ul>
               
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  border1 shado">
		 		<img src="images/jobs/1.png" class="image-fluid my-img">
					<p class="text">SBT Japan Limited </p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    	<i class="fa fa-caret-right my-icon" aria-hidden="true"></i>
                    	<li><a class="link" href="">Overseas Sales Executive</a></li>
                    </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 border1 shado">
		 		 <img src="images/jobs/2.png" class="image-fluid  
		 		      my-img">
				    <p class="text">MindTree</p>
                   <ul>
                      <li><i class="fa fa-caret-right my-icon"        aria-hidden="true"></i></li>
                       <li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                  </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 border1 shado">
		 		 <img src="images/jobs/4.png" class="image-fluid my-img">
					<p class="text">SOS Children’s Village International in Bangladesh</p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                      <li><a class="link" href="jobditals.html">Senior Director</a></li>  
                     
                  </ul>
		 	</div>
		 </div>
		

        </div>
	</div>
</div>

<div id="fultime">
	<div class="container">
		 <div class="row text-center">
		 	  <div class=" col-lg-12 col-md-12">
		 	  	  <div class="job-fultime">
		 	  	    <span id="two">Fultime Job</span>
		 	  	  </div>
		 	  </div>
		 </div>
    <div class="category-job">
		 <div class="row">
		 	<div class=" col-lg-3 col-md-3 col-sm-6 col-xs-12   border1 shado">
		 		<img src="images/jobs/1.png" class="image-fluid my-img">
					<p class="text">SBT Japan Limited </p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    	<i class="fa fa-caret-right my-icon" aria-hidden="true"></i>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6  col-xs-12 border1 shado">
		 		<img src="images/jobs/2.png" class="image-fluid my-img">
					<p class="text">MindTree</p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                    </ul>
		 	  </div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 border1 shado">
		 		<img src="images/jobs/3.png" class="image-fluid my-img">
					<p class="text">SOS Children’s Village International in Bangladesh</p>
                    
                   <ul>
                   	    <li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                    </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6  col-xs-12 border1 shado">
		 		<img src="images/jobs/3.png" class="image-fluid my-img">
					<p class="text">SOS Children’s Village International in Bangladesh</p>
                   <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                    </ul>
		 	</div>
		 </div>

		  <div class="row">
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  border1 shado" >
		 		<img src="images/jobs/8.jpg" class="image-fluid my-img">
		 	
					<p class="text">Enterior Designer</p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Asset Developments & Holdings Ltd.</a></li>
                    	
                    </ul>
               
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  border1 shado">
		 		<img src="images/jobs/1.png" class="image-fluid my-img">
					<p class="text">SBT Japan Limited </p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    	<i class="fa fa-caret-right my-icon" aria-hidden="true"></i>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 border1 shado">
		 		 <img src="images/jobs/2.png" class="image-fluid  
		 		      my-img">
				    <p class="text">MindTree</p>
                   <ul>
                      <li><i class="fa fa-caret-right my-icon"        aria-hidden="true"></i></li>
                       <li><a class="link" href="jobditals.html">Creative Visualizer (3D Animator),Digital Media </a></li>
                  </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 border1 shado">
		 		 <img src="images/jobs/4.png" class="image-fluid my-img">
					<p class="text">SOS Children’s Village International in Bangladesh</p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                      <li><a class="link" href="jobditals.html">Senior Director</a></li>  
                      
                  </ul>
		 	</div>
		 </div>
		    <div class="row">
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  border1 shado" >
		 		<img src="images/jobs/8.jpg" class="image-fluid my-img">
		 	
					<p class="text">Enterior Designer</p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Asset Developments & Holdings Ltd.</a></li>
                    	
                    </ul>
               
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  border1 shado">
		 		<img src="images/jobs/1.png" class="image-fluid my-img">
					<p class="text">SBT Japan Limited </p>
                    <ul>
                    	<li><i class="fa fa-caret-right my-icon" aria-hidden="true"></i></li>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    	<i class="fa fa-caret-right my-icon" aria-hidden="true"></i>
                    	<li><a class="link" href="jobditals.html">Overseas Sales Executive</a></li>
                    </ul>
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 border1 shado">
		 		 
		 	</div>
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 border1 shado">
		 		
		 	</div>
		 </div>

        </div>
	</div>
</div>

 <!--- imaran --> 
  <div class="imran "> 
	<div class="container">
		<div class="row content1 ">
			<div class="col-8 cate">
				<div class="row top1">
					<div class="topleft col-12 col-lg-6 col-mid-6 col-sm-6 my-4">
						
							<h1> <i class="fa fa-th-list col"> <span></span>jobs category</i></h1>
							
						
						
					</div>
					<div class="topright col-12 col-lg-6 col-mid-6 col-sm-6 my-4">
						<div class="option text-center"> 

							<a href="#" class=" active">Functional</a>
							<a href="#" class="">Industrial</a>
						</div>
					</div>
				</div>
				<div class="cate2">
					<div class="row ">
					@foreach($categories as $category)
						<div class="col-12 col-md-6 col-lg-4 col-xl-4 categories">
							<a href="{{route('jobdetails',[$category->id])}}" ><i class="fa fa-long-arrow-right"> {{$category->catagory_name}} ()</i> </a>
						</div>
					@endforeach
					</div>
					
				</div>
				
			</div>
			<div class="col-4  h-75">
				<div class="employ">
					<div class="mt-3 col-md-12 col-xl-12 col-sm-12 col-12">
					<h1 class="text-center"> “Emploies Review” </h1>
				</div>
				<div class=" emp1 mt-3 ">

					<img  src="images/em1.png" alt="" />
					<h1>Lorem ipsum, or lipsum as 
					it is sometimes known, is 
					dummy text used in laying out 
					print, graphic or web designs.</h1>
				</div>
				<div class=" emp1 mt-3 ">

					<img src="images/em2.png" alt="" />
					<h1>Lorem ipsum, or lipsum as 
					it is sometimes known, is 
					dummy text used in laying out 
					print, graphic or web designs.</h1>
				</div>	
				<div class=" emp1 mt-3 ">

					<img src="images/em3.png" alt="" />
					<h1>Lorem ipsum, or lipsum as 
					it is sometimes known, is 
					dummy text used in laying out 
					print, graphic or web designs.</h1>
				</div>
				
				<div class="link_i  col-12 pb-3"> 
					<h1>Quick Link</h1>
					<div class="link1 col-sm-12 col-lg-12 col-xl-6"> 
						<a href="#"><i class="fa fa-diamond">  Employer list</i></a>
						<a href="#"><i class="fa fa-diamond">  Deadline tomorrow</i></a>
						<a href="#"><i class="fa fa-diamond">  Part time jobs</i></a>
					</div>
					<div class="link2 col-sm-12 col-lg-12 col-xl-6"> 
						<a href="#"><i class="fa fa-diamond ">  Employer list</i></a>
						<a href="#"><i class="fa fa-diamond ">  Deadline tomorrow</i></a>
						<a href="#"><i class="fa fa-diamond ">  Part time jobs</i></a>
					</div>
				</div>
				</div>

				<div class="box3 "> 
					<div class="my-3 clo-12 ">
						<div class="row"> 
							<div class="col-6">
								<a href=""><img class="ml-2" src="images/job1.png" alt="" /></a>
							</div>
							<div class="col-6">
								<a href=""><img class="img2" src="images/job2.png" alt="" /></a>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>

		
			
		<!---PART TWO-->
		<div class="job">
			<div class="row">
				<div class="col-8 part1">
					<div class="top "> 
						<img src="images/map.png" alt="" />
						<h1>সরকারি চাকরি</h1>
					</div>
					
						<div class="row division">
							<!--col1-->
							<div class="col-12 col-lg-4 col-xl-4 col-md-6 col-sm-6 div1">
								<div class="divi">	
									<a href="jobditals.html" ><i class="fa fa-long-arrow-right"> জেলা প্রশাসকের কার্যালয়,<br />  <span>কক্সবাজার</span></i> <br />
										<small>অফিস সহায়ক</small></a> 

								</div>
								<div class="divi">
									<a href="jobditals.html" ><i class="fa fa-long-arrow-right"> চট্টগ্রাম বন্দর কর্তৃপক্ষ    <br /> </i> <br />
								<small>ভাটিয়ারী</small> </a>
									
								</div>
								
								<div class="divi">
									 <a href="jobditals.html" ><i class="fa fa-long-arrow-right"> সড়ক ও জনপথ অধিদপ্তর <br /> <br />
								<small> হিসাব রক্ষক</small></i> </a>
								</div>	

								<div class="divi">
									<a href="jobditals.html" ><i class="fa fa-long-arrow-right">যুব উন্নয়ন অধিদপ্তর   <br /> <br />
								<small>পরিদর্শক</small></i> </a>
								</div>

								<div class="divi">
									
					   			 <a href="jobditals.html" ><i class="fa fa-long-arrow-right"> সড়ক ও জনপথ অধিদপ্তর<br />  <br />
								<small>অফিস সহায়ক</small></i></a>
								</div>
				
					   			 
							</div>
								
								<!--col2-->
							<div class="col-12 col-md-6 col-sm-6 col-lg-4 col-xl-4 div2 ">
								<div class="divi">	
									<a href="jobditals.html" ><i class="fa fa-long-arrow-right"> জেলা প্রশাসকের কার্যালয়,<br />  <span>কক্সবাজার</span></i> <br />
										<small>অফিস সহায়ক</small></a> 

								</div>
								<div class="divi">
									<a href="jobditals.html" ><i class="fa fa-long-arrow-right"> চট্টগ্রাম বন্দর কর্তৃপক্ষ    <br /> </i> <br />
								<small>ভাটিয়ারী</small> </a>
									
								</div>
								
								<div class="divi">
									 <a href="jobditals.html" ><i class="fa fa-long-arrow-right"> সড়ক ও জনপথ অধিদপ্তর <br /> <br />
								<small> হিসাব রক্ষক</small></i> </a>
								</div>	

								<div class="divi">
									<a href="jobditals.html" ><i class="fa fa-long-arrow-right">যুব উন্নয়ন অধিদপ্তর   <br /> <br/>
								<small>পরিদর্শক</small></i> </a>
								</div>

								<div class="divi">
									
					   			 <a href="jobditals.html" ><i class="fa fa-long-arrow-right"> সড়ক ও জনপথ অধিদপ্তর<br /> <br />
								<small>অফিস সহায়ক</small></i></a>
								</div>
							</div>

								<!--col3-->
							

							<div class="col-12 col-md-6 col-sm-6 col-lg-4 col-xl-4 div3">

								<div class="divi">	
									<a href="jobditals.html" ><i class="fa fa-long-arrow-right"> জেলা প্রশাসকের কার্যালয়,<br />  <span>কক্সবাজার</span></i> <br />
										<small>অফিস সহায়ক</small></a> 

								</div>
								<div class="divi">
									<a href="jobditals.html" ><i class="fa fa-long-arrow-right"> চট্টগ্রাম বন্দর কর্তৃপক্ষ    <br /> </i> <br />
								<small>ভাটিয়ারী</small> </a>
									
								</div>
								
								<div class="divi">
									 <a href="jobditals.html" ><i class="fa fa-long-arrow-right"> সড়ক ও জনপথ অধিদপ্তর <br /> <br />
								<small> হিসাব রক্ষক</small></i> </a>
								</div>	

								<div class="divi">
									<a href="jobditals.html" ><i class="fa fa-long-arrow-right">যুব উন্নয়ন অধিদপ্তর   <br /> <br />
								<small>পরিদর্শক</small></i> </a>
								</div>

								<div class="divi">
									
					   			 <a href="jobditals.html" ><i class="fa fa-long-arrow-right"> সড়ক ও জনপথ অধিদপ্তর<br /> <br />
								<small>অফিস সহায়ক</small></i></a>
								</div>
							</div>
						</div>
				</div>
				<div class="col-4 part2">
					<div class="sec2"> 
						<div class="jobbox col-12"> 
							<h1>My Job Box</h1>
						</div>
						<div class="workshop col-12"> 
							<h1>workshop</h1>
						</div>
						<div class="training col-12"> 
							<h1>training</h1>
						</div>
						<div class="new_i"> 
							<h2>new</h2>
						</div>
						 
						<h3 class="col-12 ">Test Your Employability  </h3>
					
					</div>	
				</div>
			</div>
		</div>
	</div>	
</div>

 <!--- imaran -->

 <!--- jonaied -->

<div class="full-part">
	<div class="header">
		<div class="container">
			<div class="row py-3">
				<div class="col-xl-12 col-lg-12  col-sm-12 col-xs-12  hh mt-3" >
					<i class="fas fa-bullhorn"></i>
                    <p class="mt-2">Freelancer Jobs</p>
				</div>
			</div>
		</div>
	</div>	

	<div class="mid">
		<div class="container">
			<div class="row rrr">
				<div class="jjj col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12  bg-light">

					<div class="logo1 float-left d-flex mt-4">
						<img src="images/logo_j.png" alt="" />
					</div>
					<div class="sub-content mt-3">
						<h4>Manusher Jonno Foundation (MJF)</h4>
						<div class="arrow float-left">
							<img src="images/arrow.png" alt="" />
							<p class="float-right d-flex"> EOI for making video documentary <br /> on MJF</p>
						</div>
						<div class="btnnn ">
							<div class="btn btn-success btn-sm float-right btnn">
								<a href="freelancerProfile.html">Hire Now</a>
							</div>
						</div>
             		</div>
             	</div>

             <div class="jjj col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12  bg-light">

			
					<div class="logo1 float-left d-flex mt-4">
						<img src="images/logo_j.png" alt="" />
					</div>
					<div class="sub-content mt-3">
						<h4>Manusher Jonno Foundation (MJF)</h4>
						<div class="arrow float-left">
							<img src="images/arrow.png" alt="" />
							<p class="float-right d-flex"> EOI for making video documentary <br /> on MJF</p>
						</div>
						<div class="btnnn ">
							<div class="btn btn-success btn-sm float-right btnn">
								<a href="freelancerProfile.html">Hire Now</a>
							</div>
						</div>
             		</div>
             </div>

             <div class="jjj col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12  bg-light">

			
					<div class="logo1 float-left d-flex mt-4">
						<img src="images/logo_j.png" alt="" />
					</div>
					<div class="sub-content mt-3">
						<h4>Manusher Jonno Foundation (MJF)</h4>
						<div class="arrow float-left">
							<img src="images/arrow.png" alt="" />
							<p class="float-right d-flex"> EOI for making video documentary <br /> on MJF</p>
						</div>
						<div class="btnnn ">
							<div class="btn btn-success btn-sm float-right btnn">
								<a href="freelancerProfile.html">Hire Now</a>
							</div>
						</div>
             		</div>
             	</div>
			</div>

			<div class="row rrr">

				<div class="jjj col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12  bg-light">
					<div class="logo1 float-left d-flex mt-4">
						<img src="images/logo_j.png" alt="" />
					</div>
					<div class="sub-content mt-3">
						<h4>Manusher Jonno Foundation (MJF)</h4>
						<div class="arrow float-left">
							<img src="images/arrow.png" alt="" />
							<p class="float-right d-flex"> EOI for making video documentary <br /> on MJF</p>
						</div>
						<div class="btnnn ">
							<div class="btn btn-success btn-sm float-right btnn">
								<a href="freelancerProfile.html">Hire Now</a>
							</div>
						</div>
             		</div>
             </div>

             <div class="jjj col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12  bg-light">

			
					<div class="logo1 float-left d-flex mt-4">
						<img src="images/logo_j.png" alt="" />
					</div>
					<div class="sub-content mt-3">
						<h4>Manusher Jonno Foundation (MJF)</h4>
						<div class="arrow float-left">
							<img src="images/arrow.png" alt="" />
							<p class="float-right d-flex"> EOI for making video documentary <br /> on MJF</p>
						</div>
						<div class="btnnn ">
							<div class="btn btn-success btn-sm float-right btnn">
								<a href="freelancerProfile.html">Hire Now</a>
							</div>
						</div>
             		</div>
             </div>

             <div class="jjj col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12  bg-light">
				<div class="logo1 float-left d-flex mt-4">
					<img src="images/logo_j.png" alt="" />
				</div>
				<div class="sub-content mt-3">
					<h4>Manusher Jonno Foundation (MJF)</h4>
					<div class="arrow float-left">
						<img src="images/arrow.png" alt="" />
						<p class="float-right d-flex"> EOI for making video documentary <br /> on MJF</p>
					</div>
					<div class="btnnn ">
						<div class="btn btn-success btn-sm float-right btnn">
							<a href="freelancerProfile.html">Hire Now</a>
						</div>
					</div>
         		</div>
            </div>
		</div>

			<div class="row rrr">

				<div class="jjj col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12  bg-light">

			
					<div class="logo1 float-left d-flex mt-4">
						<img src="images/logo_j.png" alt="" />
					</div>
					<div class="sub-content mt-3">
						<h4>Manusher Jonno Foundation (MJF)</h4>
						<div class="arrow float-left">
							<img src="images/arrow.png" alt="" />
							<p class="float-right d-flex"> EOI for making video documentary <br /> on MJF</p>
						</div>
						<div class="btnnn ">
							<div class="btn btn-success btn-sm float-right btnn">
								<a href="freelancerProfile.html">Hire Now</a>
							</div>
						</div>
             		</div>
             </div>

             <div class="jjj col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12  bg-light">

			
					<div class="logo1 float-left d-flex mt-4">
						<img src="images/logo_j.png" alt="" />
					</div>
					<div class="sub-content mt-3">
						<h4>Manusher Jonno Foundation (MJF)</h4>
						<div class="arrow float-left">
							<img src="images/arrow.png" alt="" />
							<p class="float-right d-flex"> EOI for making video documentary <br /> on MJF</p>
						</div>
						<div class="btnnn ">
							<div class="btn btn-success btn-sm float-right btnn">
								<a href="freelancerProfile.html">Hire Now</a>
							</div>
						</div>
             		</div>
             </div>

             <div class="jjj col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12  bg-light">

			
					<div class="logo1 float-left d-flex mt-4">
						<img src="images/logo_j.png" alt="" />
					</div>
					<div class="sub-content mt-3">
						<h4>Manusher Jonno Foundation (MJF)</h4>
						<div class="arrow float-left">
							<img src="images/arrow.png" alt="" />
							<p class="float-right d-flex"> EOI for making video documentary <br /> on MJF</p>
						</div>
						<div class="btnnn ">
							<div class="btn btn-success btn-sm float-right btnn">
								<a href="freelancerProfile.html">Hire Now</a>
							</div>
						</div>
             		</div>
             </div>
		</div>

			<div class="row rrr">

				<div class="jjj col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12  bg-light">

			
					<div class="logo1 float-left d-flex mt-4">
						<img src="images/logo_j.png" alt="" />
					</div>
					<div class="sub-content mt-3">
						<h4>Manusher Jonno Foundation (MJF)</h4>
						<div class="arrow float-left">
							<img src="images/arrow.png" alt="" />
							<p class="float-right d-flex"> EOI for making video documentary <br /> on MJF</p>
						</div>
						<div class="btnnn ">
							<div class="btn btn-success btn-sm float-right btnn">
								<a href="freelancerProfile.html">Hire Now</a>
							</div>
						</div>
             		</div>
                </div>
			</div>
		</div>
	</div><!--mid-->

		<div id="ami" class="carousel slide my-5" data-ride="carousel">

			 <div class="carousel-inner">
			 	<div class="carousel-item active">
			 		<img class="image-fluid" src="images/back1.jpg" alt="">
			 	</div>
			 	<div class="carousel-item">
			 		<img class="image-fluid" src="images/back1.jpg" alt="">
			 	</div>
			 	<div class="carousel-item">
			 		<img class="image-fluid" src="images/back1.jpg" alt="">
			 	</div>
			 	<div class="carousel-item">
			 		<img class="image-fluid" src="images/back1.jpg" alt="">
			 	</div>
			 	<div class="carousel-item">
			 		<img class="image-fluid" src="images/back1.jpg" alt="">
			 	</div>
			 </div>

			 <a href="#ami" class="carousel-control-prev" data-slide="carousel">
			 	<span class="carousel-contro-prev-icon"></span>
			 </a>

			 <a href="#ami" class="carousel-control-next" data-slide="carousel">
			 	<span class="carousel-contro-next-icon"></span>
			 </a>

			 <ul class="carousel-indicators">
			 	<li data-target="#ami" data-slide-to="0" class="active"></li>
			 	<li data-target="#ami" data-slide-to="1"></li>
			 	<li data-target="#ami" data-slide-to="2"></li>
			 	<li data-target="#ami" data-slide-to="3"></li>
			 	<li data-target="#ami" data-slide-to="4"></li>
			 </ul>
		</div>
    </div>
<!--- jonaied -->
<div class="word_certification">
	<div class="pay col-12 w-50">
		<p class="lead">Pay Online with <span>EMI easy pay</span> for Training</p>
	</div>

		<!-- pay-section end-->
		
		<!-- workshop-section start-->
	<div class="workshop my-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12  ">
					<div class="work">	
						<h1 class="text-center">WORKSHOP TRAINING</h1>
						<div class="content">
							<img src="images/l1.jpg" alt="" />
							<div class="des">
								<h5>rain The Trainer - FAST TRACK</h5>
								<small>8 - 9 November 2019</small>
							</div>
						</div>
								
						<div class="content">
						<img src="images/l2.jpg" alt="" />
							<div class="des">
								<h5>Power Excel 2016: Beginners to Advance</h5>
								<small>8 - 9 November 2019</small>
							</div>
						</div>
						<div class="content">
						<img src="images/l3.jpg" alt="" />
							<div class="des">
								<h5>Techniques to Handle Social & Technical Audit</h5>
								<small>Friday, November 8, 2019</small>
							</div>
						</div>
						<div class="content">
						<img src="images/l4.jpg" alt="" />
							<div class="des">
								<h5>Social Compliance & QHSE Management Techniques for Apparel Industry</h5>
								<small>Friday, November 8, 2019</small>
							</div>
						</div>
						<div class="content">
						<img src="images/l5.jpg" alt="" />
							<div class="des">
								<h5>Knit Garments Consumption and Costing</h5>
								<small>Friday, November 8, 2019</small>
							</div>
						</div>
						<div class="content">
						<img src="images/l6.jpg" alt="" />
							<div class="des">
								<h5>Strategic Procurement and Supplier Relationship Management</h5>
								<small>Friday, November 8, 2019</small>
							</div>
						</div>
						<div class="content mb-3">
						<img src="images/l7.jpg" alt="" />
							<div class="des">
								<h5>Management Skills for HR and Admin Professionals</h5>
								<small>Friday, November 8, 2019</small>
							</div>		
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-12  ">
					<div class="course">
				<h1 class="text-center">CERTIFICATE COURSES</h1>
				<div class="content">
							<img src="images/l8.jpg" alt="" />
								<div class="des">
									<h5>PMP Exam Preparation Course (6th Edition of PMBOK)</h5>
									<small>4 November - 11 December 2019</small>
								</div>
							</div>
							<div class="content">
							<img src="images/l9.jpg" alt="" />
								<div class="des">
									<h5>Financial Management for Managers</h5>
									<small>4 November - 11 December 2019</small>
								</div>
							</div>
							<div class="content">
							<img src="images/l10.jpg" alt="" />
								<div class="des">
									<h5>Facebook Ads and Facebook Marketing Mastery Training</h5>
									<small>5 - 24 November 2019</small>
								</div>
							</div>
							<div class="content">
								<img src="images/l11.jpg" alt="" />
								<div class="des">
									<h5>Advanced Communication Skill for Managers</h5>
									<small>5 - 19 November 2019</small>
								</div>
							</div>
							<div class="content">
							<img src="images/l12.jpg" alt="" />
								<div class="des">
									<h5> Export Oriented Agro Business Establishment Strategies</h5>
									<small>5 - 15 November 2019</small>
								</div>
							</div>
							<div class="content">
							<img src="images/l13.jpg" alt="" />
								<div class="des">
									<h5>Certificate Course on Global Export - Import Business</h5>
									<small>5 November - 5 December 2019</small>
								</div>
							</div>
							<div class="content">
							<img src="images/l14.jpg" alt="" />
								<div class="des">
									<h5>MikroTik Certified Network Associate (MTCNA) Training and Exam Preparation</h5>
									<small>5 - 28 November 2019</small>
								</div>

							</div>
							
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection