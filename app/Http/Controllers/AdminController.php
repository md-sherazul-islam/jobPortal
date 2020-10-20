<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\Company;
use App\Job;
use App\Catagory;

class AdminController extends Controller
{
    public function addUser(Request $request){
        $addUser    = Admin::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'role'              => $request->role,
            'password'          => Hash::make($request->password),
            'profile_picture'   => 'default.jpg'
        ]);
        if($addUser){
            return back();
        }
    }

    public function getUsers(){
        $users = Admin::all();

        return view('admin.users',['users'=>$users]);
    }

    // public function deleteUser($id){
    //     $find   = Admin::find($id)->first;
    // }


    /****
     * Company CRUD methods
     */
    public function getCompany(){
        $companies = Company::all();

        return view('admin.companies',['companies'=>$companies]);
    }

    /***
     * Jobs CRUD
     */
    public function getJobs(){
        $jobs = Job::all();

        return view('admin.jobs',['jobs'=> $jobs]);
    }

    public function usersInfo(){
        $output = '';
        $users = Admin::all();

        
                    foreach($users as $user){
            $output.=   '<tr>
                            <td>'.$user->name.'</td>
                            <td>'.$user->email.'</td>
                            <td>'.$user->phone.'</td>
                            <td >'.$user->role.'</td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-id="'.$user->id.'" data-username="'.$user->name.'" data-useremail="'.$user->email.'" data-userphone="'.$user->phone.'" data-userrole="'.$user->role.'"  id="editUser">Edit</button>
                                <button class="btn btn-danger btn-sm" data-userid="'.$user->id.'" id="deleteUser">Delete</button>
                            </td>
                        </tr>';
                    }
                        
        echo $output;
    }

    public function deleteUser(Request $request){
        $findUser = Admin::where('id',$request->user_id)->first();

        if($findUser->delete()){
            return response()->json('User Deleted');
        }
        else{
            return response()->json('Could not delete user');
        }
    }

    public function updateUser(Request $request){
        $find = Admin::where('id',$request->id)->first();

        $updated = $find->update([
            'name'  => $request->name,
            'email'=> $request->email,
            'role'  => $request->role,
            'phone' => $request->phone
        ]);
        if($updated){
            return response()->json('Success');
        }
    
    }

    public function addCompany(Request $request){
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
            'approved'                      => 'yes',
            'verified'                      => 'yes',
        ]);
        if($registerCompany){
            return response()->json('Company Added');
        }else{
            return response()->json($validator->errors());
        }
    }

    public function deleteCompany(Request $request){
        $find = Company::where('id',$request->company_id)->first();

        if($find->delete()){
            return back();
        }
    }

    public function getCategories(){
        $categories = Catagory::all();
        return view('admin.categories',['categories'=>$categories]);
    }

    public function addCategory(Request $request){
        $added = Catagory::create([
            'catagory_name'     => $request->category_name
        ]);
        if($added){
            return redirect()->back();
        }
    }

    public function editCategory(Request $request){
        $find = Catagory::where('id',$request->cat_id)->first();

        $updated = $find->update([
            'catagory_name' => $request->category_name
        ]);
        if($updated){
            return back();
        }
    }

    public function deleteCategory(Request $request){
        $find = Catagory::where('id',$request->cat_id)->first();
        if($find->delete()){
            return redirect()->back();
        }
    }
}
