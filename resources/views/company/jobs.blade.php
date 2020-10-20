
@extends('layouts.admin')
@section('stylesheet')
<link href="{{asset('css/jobditals.css')}}" rel="stylesheet">
@endsection
@section('content')

@foreach($jobs as $job)
<div class="middle-part">

    <div class="middle-mid">
    
        <div class="middle-header">
            <div class="col-sm-8 float-left">
                <h2> {{$job->job_title}} </h2>
                <h4>Walton Digi-Tech Industries Ltd</h4>
            </div>
                <div class="dropdown">
                    <a class="float-right" role="button" id="dropdownMenuLink" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/company/editjob/{{$job->id}}">Edit</a>
                        <a class="dropdown-item" href="#"  data-jobid="{{$job->id}}" id="deleteJob">Delete</a>
                        
                    </div>
                </div>
                
                
            
        </div>

        <div class="middle-body col-sm-12 float-left">
            <ul>
            <li><a href="single-job-page.html">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> {{$job->job_location}} </span></a>
            </li>
            <li>
                <a href="single-job-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <span>{{$job->job_educationalRequirement}}</span>
                </a>
            </li>
            <li><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> <span> {{$job->job_exprience}} </span> </a></li>
        </ul>

        </div>
        <div class="middle-footer">
            <ul>
                <li><a href="single-job-page.html"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <span>Deadline: {{$job->job_applicationDeadline}}</span> </a></li>
            </ul>
        </div>
    </div>

</div>
@endforeach

<!-- Modal -->
<div class="modal fade" id="jobDeleteModal" tabindex="-1" role="dialog" aria-labelledby="jobDeleteModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Delete Job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure??
        You want to delete this job ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="{{route('company.job.delete')}}" method="POST">
            @csrf
            <input type="hidden" name="job_id" id="jobID">
            <button type="submit" class="btn btn-primary">Yes,Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ======================================== -->
<!-- Delete Modal End -->
<!-- ======================================== -->

<!-- Modal -->
<div class="modal fade" id="jobEditModal" tabindex="-1" role="dialog" aria-labelledby="jobEditModalTitle" aria-hidden="true">
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
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $(document).on('click','#deleteJob',function(event){
           
           var job_id  = $(this).attr('data-jobid');
           $('#jobID').val(job_id);
           
           $('#jobDeleteModal').modal('show');

       })
    })
</script>

@endsection

