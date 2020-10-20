<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\User;
use App\Admin;

class AuthController extends Controller
{
    public function login(Request $request){
        $this->validate($request,[
            'email'     => 'required|email',
            'password'  => 'required'
        ]);


        if(Auth::attempt(['user_email' => $request->email, 'password' => $request->password])){
            return redirect()->route('resume');
        }
        else if(Auth::guard('company')->attempt(['company_email' => $request->email, 'password' => $request->password])){
            return redirect()->route('company.profile');
        }
        else {
            return response()->json('Something went wrong');
        }
    }

    public function adminLogin(Request $request){
        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect()->route('users');
        }else{
            return response()->json('ERROR!!!');
        }
    }
}
