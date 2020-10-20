@extends('layouts.master')
@section('contentSection')
<div class="container my-3">
    <div class="card">
        <div class="card-header bg-info">Employer Register Form</div>
        <div class="card-body">
            <form action="{{route('register.company')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Company Name</label>
                        <input type="text" class="form-control" name="company_name" id="name">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" id="inputEmail4">
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
                            <option value="">Choose Country...</option>
                            <option value="Bangladesh">Bangladesh</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="district">District</label>
                        <select class="form-control" name="district" id="district">
                            <option value="">Choose District...</option>
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
                            <option value="">Choose Police Station...</option>
                            <option value="Bangladesh">Bangladesh</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="companyType">Company Type</label>
                        <input type="text" name="company_type" class="form-control" id="companyType">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tradeLicense">Trade License</label>
                        <input type="text" name="trade_license" class="form-control" id="tradeLicense">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="websiteUrl">Company Website URL</label>
                        <input type="text" name="website_url" class="form-control" id="websiteUrl">
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                </div>
                

                <div class="form-group">
                    <label for="companyDescription">Company Description</label>
                    <textarea class="form-control" name="company_description" id="companyDescription" cols="30" rows="3"></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="contactPerson">Contact Person Name</label>
                    <input type="text" class="form-control" name="contact_person" id="contactPerson">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="Designation">Designation</label>
                    <select id="Designation" name="designation" class="form-control">
                        <option selected>Choose...</option>
                        <option value="HR">HR</option>
                        <option value="Reception">Receptionist</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="contactEmail">Contact Person's Email</label>
                        <input type="email" name="contact_email" class="form-control" id="contactEmail">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contactNumber">Contact Person's Phone</label>
                        <input type="text" name="contact_number" class="form-control" id="contactNumber">
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

@endsection