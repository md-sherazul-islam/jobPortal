<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Catagory;
use App\Job;

class JobController extends Controller
{
    public function index(){
        $categories = Catagory::all();
        return view('company.postjob',['categories'=>$categories]);
    }
    public function postJob(Request $request){
        $job_create = Job::create([
            'company_id'        => Auth::guard('company')->user()->id,
            'job_title'         => $request->job_title,
            'job_category'      => $request->job_category,
            'job_vacancy'       => $request->job_vacancy,
            'job_context'       => $request->job_context,
            'job_description'   => $request->job_description,
            'job_location'      => $request->job_location,
            'job_educationalRequirement'    => $request->edu_requirement,
            'job_salary'        => $request->salary,
            'job_exprience'     => $request->exprience,
            'job_applicationDeadline'       => $request->application_deadline,
        ]);
        if($job_create){
            return response()->json('Job Created');
        }
    }

    public function editJob($id){
        $categories = Catagory::all();
        $job = Job::where('id',$id)->first();

        return view('company.editjob',['job'=>$job,'categories'=>$categories]);
    }

    public function deleteJob(Request $request){
        $find = Job::where('id',$request->job_id)->first();

        if($find->delete()){
            return redirect()->back();
        }
    }

    public function updateJob(Request $request, $id){
        $find = Job::where('id',$id)->first();
        if($find->company_id == Auth::guard('company')->user()->id){
            //dd($request->all());

            $update = $find->update([
                'job_title'         => $request->job_title,
                'job_category'      => $request->job_category,
                'job_vacancy'       => $request->job_vacancy,
                'job_context'       => $request->job_context,
                'job_description'   => $request->job_description,
                'job_location'      => $request->job_location,
                'job_educationalRequirement'    => $request->edu_requirement,
                'job_salary'        => $request->salary,
                'job_exprience'     => $request->exprience,
                'job_applicationDeadline'       => $request->application_deadline,
            ]);
            if($update){
                return redirect()->back();
            }
        }else{
            return response()->json('404');
        }
    }
}
