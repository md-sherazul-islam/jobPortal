@extends('layouts.admin')
@section('stylesheet')
<link href="css/jobditals.css" rel="stylesheet">
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
            
                <span class="float-right"><i class="fas fa-ellipsis-v"></i></span>
            
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

@endsection