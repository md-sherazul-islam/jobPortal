<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResumePersonalDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\ResumeAddressDetail;
use App\ResumeCareerInfo;
use App\ResumeTrainingSummary;
use App\ResumeProfessionalQualification;
use App\EmployementHistory;
use App\Specialization;
use App\LanguageProficiency;
use App\Reference;
use App\Catagory;
use App\Job;

use App\User;

class UserController extends Controller
{
    public function index(){
        $categories = Catagory::all();
        return view('index',['categories'=>$categories]);
    }

    public function jobDetails($category){
        $jobs = DB::table('jobs')
                    ->join('companys', 'companys.id', '=','jobs.company_id')
                    ->where('jobs.job_category',$category)
                    ->get();
        return view('jobdetails',['jobs'=>$jobs]);
    }

    public function singleJob($id){
        $job = Job::where('id',$id)->first();
        return view('single_job_page',['job'=>$job]);
    }

    public function resume(){
        $userPersonalDetails = ResumePersonalDetail::where('user_id',Auth::user()->id)->first();
        $userAddressDetails = ResumeAddressDetail::where('user_id',Auth::user()->id)->first();
        $userCareerInfo = ResumeCareerInfo::where('user_id',Auth::user()->id)->first();
        $userTrainingInfo = ResumeTrainingSummary::where('user_id',Auth::user()->id)->get();
        $userExprienceInfo = EmployementHistory::where('user_id',Auth::user()->id)->get();
        

        return view('resume',['userPersonalDetails'=>$userPersonalDetails, 
                            'userAddressDetails'=>$userAddressDetails,
                            'userCareerInfo'=>$userCareerInfo,
                            'userTrainingInfos'=> $userTrainingInfo,
                            'userExprienceInfos' => $userExprienceInfo
                            ]);
    }

    public function personalDetails(Request $request){
        $find = User::where('id',Auth::user()->id)->first();
        $recordExist = ResumePersonalDetail::where('user_id',Auth::user()->id)->first();
        $this->validate($request,[
            'first_name'        => 'required',
            'last_name'         => 'required',
            'mobile_number'     => 'required',
            'email'             => 'required',
            'nationality'       => 'required'
        ]);

        
        //dd($find);
        if($find){
            $find->update([
                'user_firstName'        => $request->first_name,
                'user_lastName'         => $request->last_name,
                'user_phone'            => $request->mobile_number,
                'user_email'            => $request->email,
            ]);
        }

        if($request->father_name != '' || $request->mother_name != '' || $request->religion !='' || $request->maritial_status !='' || $request->nationality != '' || $request->national_id_number != '' || $request->passport_number != ''){
            if(!$recordExist){
                $create = ResumePersonalDetail::create([
                    'user_id'           => Auth::user()->id,
                    'father_name'           => $request->father_name,
                    'mother_name'           => $request->mother_name,
                    'religion'          => $request->religion,
                    'marital_status'            => $request->maritial_status,
                    'nationality'           => $request->nationality,
                    'national_id_no'            => $request->national_id_number,
                    'passport_no'           => $request->passport_number,
                ]);
                if($create){
                    return response()->json('Resume Updated');
                }
            }else{
                $recordExist->update([
                    'father_name'           => $request->father_name,
                    'mother_name'           => $request->mother_name,
                    'religion'          => $request->religion,
                    'marital_status'            => $request->maritial_status,
                    'nationality'           => $request->nationality,
                    'national_id_no'            => $request->national_id_number,
                    'passport_no'           => $request->passport_number,
                ]);
            }
        }
        return response()->json('Data Updated');
        
    }

    public function addressDetails(Request $request){
        $recordExist = ResumeAddressDetail::where('user_id',Auth::user()->id)->first();
        $this->validate($request,[
            'present_district'      => 'required',
            'present_thana'         => 'required',
            'present_postOffice'    => 'required',
            'permanent_district'    => 'required',
            'permanent_thana'       => 'required',
            'permanent_postOffice'  => 'required',
            'present_address'       => 'required',
            'permanent_address'     => 'required'

        ]);
        if($recordExist){
            $recordExist->update([
                'present_district'          => $request->present_district,
                'present_policeStation'     => $request->present_thana,
                'present_postOffice'        => $request->present_postOffice,
                'permanent_district'        => $request->permanent_district,
                'permanent_policeStation'   => $request->permanent_thana,
                'permanent_postOffice'      => $request->permanent_postOffice,
                'present_address'           => $request->present_address,
                'permanent_address'         => $request->permanent_address
            ]);
            return response()->json('Data Updated');
        }else{
            $create = ResumeAddressDetail::create([
                'user_id'                   => Auth::user()->id,
                'present_district'          => $request->present_district,
                'present_policeStation'     => $request->present_thana,
                'present_postOffice'        => $request->present_postOffice,
                'permanent_district'        => $request->permanent_district,
                'permanent_policeStation'   => $request->permanent_thana,
                'permanent_postOffice'      => $request->permanent_postOffice,
                'present_address'           => $request->present_address,
                'permanent_address'         => $request->permanent_address
            ]);
            if($create){
                return response()->json('Resume Updated');
            }
            else{
                return response()->json('ERROR!!!');
            }
        }
        
    }

    public function applicationInfo(Request $request){
        $recordExist = ResumeCareerInfo::where('user_id',Auth::user()->id)->first();
        if($recordExist){
            $recordExist->update([
                'objective'         => $request->objective,
                'present_salary'    => $request->present_salary,
                'expected_salary'   => $request->expected_salary,
                'looking_for'       => $request->looking_for,
                'available_for'     => $request->available_for
            ]);
            return response()->json('Data Updated');
        }else{
            $create = ResumeCareerInfo::create([
                'user_id'           => Auth::user()->id,
                'objective'         => $request->objective,
                'present_salary'    => $request->present_salary,
                'expected_salary'   => $request->expected_salary,
                'looking_for'       => $request->looking_for,
                'available_for'     => $request->available_for
            ]);
            if($create){
                return response()->json('Created');
            }else{
                return response()->json('ERROR!!!');
            }
        }
        
    }

    public function trainingSummary(Request $request){
        foreach($request->training_title as $key => $training){
            $data = array(
                'user_id'       => Auth::user()->id,
                'training_title'    => $request->training_title[$key],
                'topics_covered'    => $request->topic[$key],
                'institute_name'    => $request->institute_name[$key],
                'location'          => $request->institute_location[$key],
                'country'           => $request->country[$key],
                'training_year'     => $request->training_year[$key],
                'duration'          => $request->duration[$key]
            );
            $datas[] = $data;
            
        }
        $create = ResumeTrainingSummary::insert($datas);
            if($create){
                return response()->json('Data Inserted');
            }
    }

    public function professionalQualification(Request $request){
        $create = ResumeProfessionalQualification::create([
            'user_id'       => Auth::user()->id,
            'certificate_name'  => $request->certificate_name,
            'institute_name'    => $request->institute_name,
            'location'          => $request->location,
            'certification_period'  => $request->certification_period
        ]);
        if($create){
            return response()->json('Created');
        }
    }

    public function employementHistory(Request $request){
        $alreadyExist = employementHistory::where('id',$request->employement_id)
                                            ->where('user_id',Auth::user()->id)
                                            ->first();
        if($alreadyExist){
            $alreadyExist->update([
                'user_id'                   => Auth::user()->id,
                'company_name'              => $request->company_name,
                'company_business'          => $request->company_business,
                'designation'               => $request->designation,
                'department'                => $request->department,
                'responsiblity'             => $request->responsiblities,
                'company_location'          => $request->company_location,
                'employment_period_from'   => $request->employement_period_form,
                'employment_period_to'     => $request->employement_period_to
            ]);
            return response()->json('Data Updated');
        }else{
            $create = employementHistory::create([
                'user_id'                   => Auth::user()->id,
                'company_name'              => $request->company_name,
                'company_business'          => $request->company_business,
                'designation'               => $request->designation,
                'department'                => $request->department,
                'responsiblity'             => $request->responsiblities,
                'company_location'          => $request->company_location,
                'employment_period_from'   => $request->employement_period_form,
                'employment_period_to'     => $request->employement_period_to
            ]);
            if($create){
                return response()->json('Data Inserted');
            }
        }

        
    }
    public function specilization(Request $request){
        $create = Specialization::create([
            'user_id'       => Auth::user()->id,
            'skill'         => $request->skill,
            'learned_how'   => $request->learned_how,
            'skill_description' => $request->skill_description
        ]);
        if($create){
            return response()->json('Data Inserted');
        }
    }
    public function languageProficiency(Request $request){
        $create = LanguageProficiency::create([
            'user_id'       => Auth::user()->id,
            'language'      => $request->language,
            'reading'       => $request->reading,
            'writing'       => $request->writing,
            'speaking'      => $request->speaking
        ]);

        if($create){
            return response()->json('Data Inserted');
        }
    }

    public function reference(Request $request){
        $create = Reference::create([
            'user_id'       => Auth::user()->id,
            'ref_name'      => $request->referal_name,
            'ref_organization'  => $request->organization,
            'ref_designation'   => $request->designation,
            'mobile'            => $request->mobile,
            'ref_email'         => $request->email,
            'ref_relation'      => $request->relation,
            'ref_address'       => $request->address
        ]);
        if($create){
            return response()->json('Data Inserted');
        }
    }

    public function deleteEmployementHistory($id){
        $deleteable = employementHistory::where('id',$id)
                                        ->where('user_id',Auth::user()->id)
                                        ->first();
        if($deleteable->delete()){
            return response()->json('Data Deleted');
        }else{
            return response()->json('ERROR!!! Deleting Data');
        }
    }
}
