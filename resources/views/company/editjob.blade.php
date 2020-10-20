@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">Edit Job</div>
    <div class="card-body">
        <form action="{{route('update.job',$job->id )}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="job_title">Job Title</label>
                <input type="text" value="{{$job['job_title']}}" class="form-control" name="job_title" id="job_title">
            </div>
            <div class="form-group">
                <label for="job_category">Job Category</label>
                <select class="form-control" name="job_category" id="job_category">
                    <option select value="{{$job['job_category']}}">{{$job['job_category']}}</option>
                    @foreach($categories as $category)
                    <option value="{{$category->catagory_name}}">{{$category->catagory_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="job_vacancy">Job Vacancy</label>
                <input type="text" value="{{$job['job_vacancy']}}" class="form-control" name="job_vacancy" id="job_vacancy">
            </div>
            <div class="form-group">
                <label for="job_context">Job Context</label>
                <select class="form-control" name="job_context" id="job_context">
                    <option value="{{$job['job_context']}}">{{$job['job_context']}}</option>
                    <option value="Intern">Intern</option>
                    <option value="Part-Time">Part Time</option>
                    <option value="Full-Time">Full Time</option>
                </select>
            </div>
            <div class="form-group">
                <label for="job_des">Job Description</label>
                <textarea class="form-control"  name="job_description" id="job_des" rows="3">{{$job['job_description']}}</textarea>
            </div>
            <div class="form-group">
                <label for="job_location">Job Location</label>
                <input type="text" value="{{$job['job_location']}}" class="form-control" name="job_location" id="job_location">
            </div>
            <div class="form-group">
                <label for="edu_requirement">Educational Requirement</label>
                <input type="text" value="{{$job['job_educationalRequirement']}}" class="form-control" name="edu_requirement" id="edu_requirement">
            </div>
            <div class="form-group">
                <label for="job_salary">Job Salary</label>
                <input type="text" value="{{$job['job_salary']}}" class="form-control" name="salary" id="job_salary">
            </div>
            <div class="form-group">
                <label for="exprience">Exprience</label>
                <input type="text" value="{{$job['job_exprience']}}" class="form-control" name="exprience" id="exprience">
            </div>
            <div class="form-group">
                <label for="deadline">Application Deadline</label>
                <input type="text" value="{{$job['job_applicationDeadline']}}" class="form-control" name="application_deadline" id="deadline">
            </div>
            
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </form>
    </div>
</div>

@endsection