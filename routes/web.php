<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','UserController@index');

Route::get('/jobdetails/{category}','UserController@jobDetails')->name('jobdetails');
Route::get('/jobdetails/singlejob/{jobid}','UserController@singleJob')->name('jobdetails.singlejob');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signupmodel', function () {
    return view('signupmodel');
});
Route::get('/singlejob', function () {
    return view('single_job_page');
});

Route::get('/freelancerprofile', function () {
    return view('freelancer_profile');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/usersignin','AuthController@login')->name('usersignin');

Route::post('/signupuser','SignupController@signupUser')->name('signupuser');

Route::get('/employerregister',function(){
    return view('employer_register');
});

Route::post('/registerCompany','SignupController@registerCompany')->name('register.company');





Route::get('/admin/login',function(){
    return view('admin.login');
});
Route::post('/admin/signin','AuthController@adminLogin')->name('admin.login');



//Route::delete('/deleteuser','AdminController@deleteUser')->name('delete.user');

Route::middleware(['auth:admin'])->group(function(){
    //Admin Panel
    Route::get('/admin',function(){
        return view('layouts.admin');
    });
    Route::get('/dashboard',function(){
        return view('dashboard');
    });
    Route::get('/users','AdminController@getUsers')->name('users');
    Route::post('/adduser','AdminController@addUser')->name('add.user');
    Route::get('/getusers','AdminController@usersInfo')->name('get.users');
    Route::post('/deleteusers','AdminController@deleteUser')->name('delete.user');
    Route::post('/updateuser','AdminController@updateUser')->name('update.user');


    Route::get('/companies','AdminController@getCompany');
    Route::post('/admin/addcompany','AdminController@addCompany')->name('admin.add.company');
    Route::post('/admin/deletecompany','AdminController@deleteCompany')->name('admin.delete.company');

    Route::get('/categories','AdminController@getCategories');
    Route::post('/admin/addcategory','AdminController@addCategory')->name('admin.add.category');
    Route::post('/admin/editcategory','AdminController@editCategory')->name('admin.edit.category');
    Route::post('/admin/deletecategory','AdminController@deleteCategory')->name('admin.delete.category');

    Route::get('/jobs','AdminController@getJobs');    

});

Route::middleware(['auth:company'])->group(function(){
    Route::get('/company/profile','CompanyController@companyProfile')->name('company.profile');
    Route::post('/company/profile/update','CompanyController@updateProfile')->name('company.update.profile');
    Route::post('/postjob','JobController@postjob')->name('postjob');
    Route::get('/company/jobs','CompanyController@jobs');
    Route::post('/company/jobs/delete','JobController@deleteJob')->name('company.job.delete');
    Route::get('/company/postjob','JobController@index');
    Route::get('/company/editjob/{id}','JobController@editJob');
    Route::post('/company/updatejob/{id}','JobController@updateJob')->name('update.job');
    
});

Route::middleware(['auth'])->group(function(){
    Route::get('/resume','UserController@resume')->name('resume');

    Route::post('/user/personaldetails','UserController@personalDetails')->name('post.user.personaldetails');
    Route::post('/user/addressdetails','UserController@addressDetails')->name('post.user.addressdetails');
    Route::post('/user/applicationinfo','UserController@applicationInfo')->name('post.user.applicationinfo');

    Route::post('/user/trainingsummary','UserController@trainingSummary')->name('post.user.trainingsummary');
    Route::post('/user/professionalqualification','UserController@professionalQualification')->name('post.user.professionalqualification');
    Route::post('/user/employementhistory','UserController@employementHistory')->name('post.user.employementhistory');
    Route::post('/user/specilization','UserController@specilization')->name('post.user.specilization');
    Route::post('/user/languageproficiency','UserController@languageProficiency')->name('post.user.languageproficiency');
    Route::post('/user/reference','UserController@reference')->name('post.user.reference');

    Route::post('/user/delete/employementhistory/{id}','UserController@deleteEmployementHistory')->name('delete.user.employementhistory');
});