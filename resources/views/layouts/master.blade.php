<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css?fbclid=IwAR2IDH9eehzFp0zvyoEP3HU47VGQQDczSJqWL3KWQvGQA9oarv9yUlzR15o">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	 <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     
     
     
     
     
     
     @yield('stylesheet')
</head>
<body>
    <div id="app">
        <!--================Header Menu Area =================-->
        <div class="header_top">
            <div class="container">
                <nav class="navbar navbar-expand-md ">
                    <a class="navbar-barand jobs" href="#feature">Jobs</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#manu" >
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                        <div class="row w-100 mr-0">
                        <div class="col-lg-5 col-md-5 pr-0">
                            <div class="All_sos">
                                <a class="signin" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sign in Or Sign Up</a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <div class="card">
                                        <div class="card-body">
                                            User <a class="btn btn-info" href="/signin">Login</a> or <a class="btn btn-success" href="/signupmodel">Regiester</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            Employer <a class="btn btn-primary" href="/signin">Login</a> or <a class="btn btn-danger" href="/employerregister" >Register</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-lg-7 col-md-7 pr-0">
                            <div class="collapse navbar-collapse offset w-100" id="manu">
                                <ul class=" nav navbar-nav ml-auto" >
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-facebook fb"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href=""><i class=" fa fa-google goggle"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href=""><i class="fa fa-youtube-play playu"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-phone pcel"></i></a>
                                    </li>
                                    <div class="lang">
                                        
                                    <li class="nav-item">
                                        <a class="nav-link Eng" id="lang" href="#">ENG</a>
                            
                                        <a class="nav-link bang " id="lang" href="#">বাংলা</a>
                                    </li>
                                
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </nav>
            </div>
        </div>



        <div class="header_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 my_img ">
                        <a href="index.html" >
                        <img src="{{asset('images/logo.png')}}" alt="pencile_box" class="images-fluid pt-2 pb-2 logo_r" style="width: 55%;">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="dropdown">
                            <button class="dropdown-toggle" data-toggle="dropdown">Cereer Resource
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item">Cereer Resource 1</a>
                                <a class="dropdown-item">Cereer Resource 2</a>
                                <a class="dropdown-item">Cereer Resource 3</a>
                            </div>
                        </div>
                    </div>
                    @if(Auth::guard('company')->user())
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="post-job text-center">
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Post Jobs</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!--================Header Menu Area =================-->

        @yield('contentSection')

    <!-- footer-section start -->
        <section id="footer"  > 

            <div class="container"> 
                <div class="row mt-0 "> 
                    <div class=" col-6 col-md-3 col-sm-3  part-1 footer_icon"> 
                        <h2 style="color: #fff; font-weight: bold; font-size:24px;">About Us</h2>
                        <a href="#">About Pencilbox Training</a><br />
                        <a href="#">Terms & Conditions</a><br />
                        <a href="#">International Partners</a><br />
                        <a href="#">Other Partners</a><br />
                        <a href="#">Privacy Policy</a><br />
                        <a href="#">Feedback</a><br />
                        <a href="#">Contact Us</a>
                    </div>



                    <div class="col-6  col-md-3 col-sm-3 part-2 footer_icon"> 
                        <h2 style="color: #fff; font-weight: bold; font-size:24px;">Job Seekers</h2>
                        <a href="#">Create Account</a><br />
                        <div class="new"><h1>new</h1></div>
                        <a href="#">Career Counseling</a><br />
                        <a href="#">My Bdjobs</a><br />
                        <a href="#">FAQ</a><br />
                        <a href="#">Video Guides</a>
                    </div>


                    <div class="col-md-3 col-sm-3 col-6 part-3 footer_icon">
                        <h2 style="color: #fff; font-weight: bold; font-size:24px;">Employers</h2>
                        <a href="#">Create Account</a><br />
                        <a href="#">Products/Service</a><br />
                        <a href="#">Post a Job</a><br />
                        <a href="#">FAQ</a><br />
                        <p>Download Employer App</p>
                        <div class="google">
                            <img src="images/go.jpg" alt="" />
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-3 col-6 part-4 footer_icon">
                            <h2 style="color: #fff; font-weight: bold; font-size:24px;">Tools & Social Media</h2>
                        <a href="#"><i class="fa fa-android">App Pencilbox Android App</i></a><br />
                        <a href="#"><i class="fa fa-android">App Pencilbox iOS App</i></a><br />
                        <a href="#"><i class="fa fa-facebook-f">   Facebook</i></a><br />
                        <a href="#"><i class="fa fa-google-plus">   Google</i> </a><br />
                        <a href="#"><i class="fa fa-youtube-square">   Youtube</i></a><br />
                        <a href="#"><i class="fa fa-linkedin">   LinkedIn</i></a><br />
                        <p >Download Mobile App</p>
                            <div class="appimg col-12">
                                <div class="apple">
                                    <img src="images/go.jpg" alt="" />
                                </div>
                                <div class="apple1">
                                    <img src="images/apple.jpg" alt="" />
                                </div>

                            </div>
                            
                    </div>


                    <div class="footer-last text-center col-12 mt-4">
                        <p>Need any support ? Call to <span><img src="images/p.png" alt="" /></span>16479</p>
                    </div>

                </div>
            </div>
        </section> <!--footer section end -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('postjob')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="job_title">Job Title</label>
                            <input type="text" class="form-control" name="job_title" id="job_title">
                        </div>
                        <div class="form-group">
                            <label for="job_category">Job Category</label>
                            <select class="form-control" name="job_category" id="job_category">
                                <option value="">Choose a Category</option>
                                <option value="IT">IT</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Fashion Design">Graphic Design</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="job_vacancy">Job Vacancy</label>
                            <input type="text" class="form-control" name="job_vacancy" id="job_vacancy">
                        </div>
                        <div class="form-group">
                            <label for="job_context">Job Context</label>
                            <select class="form-control" name="job_context" id="job_context">
                                <option value="">Choose Job Context...</option>
                                <option value="Intern">Intern</option>
                                <option value="Part-Time">Part Time</option>
                                <option value="Full-Time">Full Time</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="job_des">Job Description</label>
                            <textarea class="form-control" name="job_description" id="job_des" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="job_location">Job Location</label>
                            <input type="text" class="form-control" name="job_location" id="job_location">
                        </div>
                        <div class="form-group">
                            <label for="edu_requirement">Educational Requirement</label>
                            <input type="text" class="form-control" name="edu_requirement" id="edu_requirement">
                        </div>
                        <div class="form-group">
                            <label for="job_salary">Job Salary</label>
                            <input type="text" class="form-control" name="salary" id="job_salary">
                        </div>
                        <div class="form-group">
                            <label for="exprience">Exprience</label>
                            <input type="text" class="form-control" name="exprience" id="exprience">
                        </div>
                        <div class="form-group">
                            <label for="deadline">Application Deadline</label>
                            <input type="text" class="form-control" name="application_deadline" id="deadline">
                        </div>
                        
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
                
                </div>
            </div>
        </div><!--Modal End -->

    </div> <!--div id app -->

    @yield('scripts')
</body>
</html>