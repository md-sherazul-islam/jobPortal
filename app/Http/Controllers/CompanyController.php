<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Job;
use App\Company;


class CompanyController extends Controller
{
    public function jobs(){
        $jobs = Job::where('company_id',Auth::guard('company')->user()->id)->latest()->get();
        return view('company.jobs',['jobs'=>$jobs]);
    }
    public function companyProfile(){
        return view('company.profile');
    }

    public function updateProfile(Request $request){
        $find = Company::findOrFail($request->id);

        if($request->password != null){
            $this->validate($request,[
                'company_name'      => 'required',
                'email'             => 'required|email',
                'password'          => 'required|confirmed',
                'country'           => 'required',
                'district'          => 'required',
                'police_station'    => 'required',
                'address'           => 'required',
                'company_type'      => 'required',
                'company_description'=> 'required',
                'trade_license'     => 'required',
                'website_url'       => 'required',
                'contact_person'    => 'required',
                'designation'       => 'required',
                'contact_email'     => 'required',
                'contact_number'    => 'required'
            ]);
    
            $registerCompany    = $find->update([
                'company_name'                  => $request->company_name,
                'company_email'                 => $request->email,
                'password'                      => Hash::make($request->password),
                'company_country'               => $request->country,
                'company_district'              => $request->district,
                'company_policeStation'         => $request->police_station,
                'company_address'               => $request->address,
                'company_type'                  => $request->company_type,
                'company_description'           => $request->company_description,
                'company_tradeLicense'          => $request->trade_license,
                'company_websiteUrl'            => $request->website_url,
                'company_logo'                  => 'default.jpg',
                'company_contactPersonName'     => $request->contact_person,
                'company_contactPersonDesignation' => $request->designation,
                'company_contactPersonEmail'    => $request->contact_email,
                'company_contactPersonPhone'    => $request->contact_number,
                
            ]);
        }else{
            $this->validate($request,[
                'company_name'      => 'required',
                'email'             => 'required|email',
                
                'country'           => 'required',
                'district'          => 'required',
                'police_station'    => 'required',
                'address'           => 'required',
                'company_type'      => 'required',
                'company_description'=> 'required',
                'trade_license'     => 'required',
                'website_url'       => 'required',
                'contact_person'    => 'required',
                'designation'       => 'required',
                'contact_email'     => 'required',
                'contact_number'    => 'required'
            ]);
    
            $registerCompany    = $find->update([
                'company_name'                  => $request->company_name,
                'company_email'                 => $request->email,
                
                'company_country'               => $request->country,
                'company_district'              => $request->district,
                'company_policeStation'         => $request->police_station,
                'company_address'               => $request->address,
                'company_type'                  => $request->company_type,
                'company_description'           => $request->company_description,
                'company_tradeLicense'          => $request->trade_license,
                'company_websiteUrl'            => $request->website_url,
                'company_logo'                  => 'default.jpg',
                'company_contactPersonName'     => $request->contact_person,
                'company_contactPersonDesignation' => $request->designation,
                'company_contactPersonEmail'    => $request->contact_email,
                'company_contactPersonPhone'    => $request->contact_number,
               
            ]);
        }
        return redirect()->back();
    }
}
