@extends('layouts.admin')
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/companyprofile.css')}}">
@endsection
@section('content')
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="profile-card">

                <div class="profile-header">

                    <div class="cover-image">
                        <img src="https://cdn.pixabay.com/photo/2019/10/19/14/16/away-4561518_960_720.jpg" class="img img-fluid">
                    </div>
                    <div class="user-image">
                        <img src="https://scontent.fslv1-1.fna.fbcdn.net/v/t1.0-1/p240x240/71764978_543119796448430_5969446522109034496_n.jpg?_nc_cat=105&_nc_oc=AQnoaTQx8fxeyzbIbtQyvZXghFdEQl-ds6NQr_13xAXuGmWnigS1zJHTuH8sKv5e9-TSN3KRAuptCtwM-LlwxidP&_nc_ht=scontent.fslv1-1.fna&oh=52752a53e6b91980d3f9bf227064a95d&oe=5E5A25B9" class="img ">
                    </div>
                </div>

                <div class="profile-content">
                    <div class="profile-name">{{Auth::guard('company')->user()->company_name}}</div>
                    <div class="profile-designation">{{Auth::guard('company')->user()->company_type}}</div>
                    <p class="profile-description">{{Auth::guard('company')->user()->company_description}}</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                <p class="card-title font-weight-bold col-sm-10">About</p>
                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                </div>
                <hr>
                <p class="card-description">Company Information</p>
                <ul class="about">
                    <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Name:</span><span class="about-item-detail">{{Auth::guard('company')->user()->company_name}}</span></li>
                    <li class="about-items"><i class="mdi mdi-lock-outline icon-sm "></i><span class="about-item-name">Password:</span><span class="about-item-detail">**********</span> </li>
                    <li class="about-items"><i class="mdi mdi-format-align-left icon-sm "></i><span class="about-item-name">Description:</span><span class="about-item-detail">{{Auth::guard('company')->user()->company_description}}</span> </li>
                    <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Trade License:</span><span class="about-item-detail">{{Auth::guard('company')->user()->company_tradeLicense}}</span></li>        
                </ul>
                <p class="card-description">Contact Information</p>
                <ul class="about">
                    <li class="about-items"><i class="mdi mdi-phone icon-sm "></i><span class="about-item-name">Phone:</span><span class="about-item-detail">{{Auth::guard('company')->user()->company_contactPersonPhone}}</span></li>
                    <li class="about-items"><i class="mdi mdi-map-marker icon-sm "></i><span class="about-item-name">Address:</span><span class="about-item-detail">{{Auth::guard('company')->user()->company_address}}</span> </li>
                    <li class="about-items"><i class="mdi mdi-email-outline icon-sm "></i><span class="about-item-name">Email:</span><span class="about-item-detail"><a href="">{{Auth::guard('company')->user()->company_email}}</a></span> </li>
                    <li class="about-items"><i class="mdi mdi-web icon-sm "></i><span class="about-item-name">Site:</span><span class="about-item-detail"><a href="#">{{Auth::guard('company')->user()->company_websiteUrl}}</a></span> </li>
                </ul>
                


            </div>
        </div>
    </div>

</div>

<!-- Edit Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Company Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{route('company.update.profile')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{Auth::guard('company')->user()->id}}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Company Name</label>
                        <input type="text" value="{{Auth::guard('company')->user()->company_name}}" class="form-control" name="company_name" id="name">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" value="{{Auth::guard('company')->user()->company_email}}" class="form-control" name="email" id="inputEmail4">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" name="password" id="inputPassword4">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="confirmPassword">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="country">Country</label>
                        <select class="form-control" name="country" id="country">
                            <option value="{{Auth::guard('company')->user()->company_country}}">{{Auth::guard('company')->user()->company_country}}</option>
                            <option value="Bangladesh">Bangladesh</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="district">District</label>
                        <select class="form-control" name="district" id="district">
                            <option value="{{Auth::guard('company')->user()->company_district}}">{{Auth::guard('company')->user()->company_district}}</option>
                            <option value="Khilkhet">Khilkhet</option>
                            <option value="Badda">Badda</option>
                            <option value="Banani">Banani</option>
                            <option value="Dhanmondi">Dhanmondi</option>
                            <option value="Khilgaon">Khilgaon</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="ps">Police Station</label>
                        <select class="form-control" name="police_station" id="ps">
                            <option value="{{Auth::guard('company')->user()->company_policeStation}}">{{Auth::guard('company')->user()->company_policeStation}}</option>
                            <option value="Bangladesh">Bangladesh</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="companyType">Company Type</label>
                        <input type="text"value="{{Auth::guard('company')->user()->company_type}}" name="company_type" class="form-control" id="companyType">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tradeLicense">Trade License</label>
                        <input type="text"value="{{Auth::guard('company')->user()->company_tradeLicense}}" name="trade_license" class="form-control" id="tradeLicense">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="websiteUrl">Website URL</label>
                        <input type="text"value="{{Auth::guard('company')->user()->company_websiteUrl}}" name="website_url" class="form-control" id="websiteUrl">
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text"value="{{Auth::guard('company')->user()->company_address}}" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                </div>
                

                <div class="form-group">
                    <label for="companyDescription">Company Description</label>
                    <textarea class="form-control" name="company_description" id="companyDescription" cols="30" rows="3">{{Auth::guard('company')->user()->company_description}}</textarea>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="contactPerson">Contact Person Name</label>
                    <input type="text"value="{{Auth::guard('company')->user()->company_contactPersonName}}" class="form-control" name="contact_person" id="contactPerson">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="Designation">Designation</label>
                    <select id="Designation" name="designation" class="form-control">
                        <option value="{{Auth::guard('company')->user()->company_contactPersonDesignation}}">{{Auth::guard('company')->user()->company_contactPersonDesignation}}</option>
                        <option value="HR">HR</option>
                        <option value="Reception">Receptionist</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="contactEmail">Contact Person's Email</label>
                        <input type="email"value="{{Auth::guard('company')->user()->company_contactPersonEmail}}" name="contact_email" class="form-control" id="contactEmail">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contactNumber">Contact Person's Phone</label>
                        <input type="text"value="{{Auth::guard('company')->user()->company_contactPersonPhone}}" name="contact_number" class="form-control" id="contactNumber">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            </div>
            
        </div>
    </div>
</div> 
<!--==================================================>
    End Edit Modal
<====================================================-->

@endsection