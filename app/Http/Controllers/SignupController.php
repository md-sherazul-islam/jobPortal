<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Company;

class SignupController extends Controller
{
    public function signupUser(Request $request){
        $this->validate($request,[
            'first_name'        => 'required',
            'last_name'         => 'required',
            'phone'             => 'required',
            'email'             => 'required',
            'password'          => 'required | confirmed'
        ]);
        $creatUser  = User::create([
            'user_firstName'        => $request->first_name,
            'user_lastName'         => $request->last_name,
            'user_skillCatagory'    => 'IT',
            'user_phone'            => $request->phone,
            'user_email'            => $request->email,
            'password'              => Hash::make($request->password),
            'user_profilePicture'   => 'sjflsjfsl.jpg',
        ]);
        if($creatUser){
            return response()->json('User Created');
        }else {
            return response()->json('ERROR!!!!');
        }
    }

    /***
     * Register Company 
     */
    public function registerCompany(Request $request){
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

        $registerCompany    = Company::create([
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
            'approved'                      => 'no',
            'verified'                      => 'no',
        ]);
        if($registerCompany){
            return response()->json('Company Added');
        }else{
            return response()->json($validator->errors());
        }
    }
}
