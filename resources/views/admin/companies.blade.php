@extends('layouts.admin')
@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/datatables/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/datatables/css/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/datatables/css/select.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/datatables/css/fixedHeader.bootstrap4.css')}}">

@endsection

@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="col-md-6 float-left">Users Table</h5>
                <button class="btn btn-primary btn-sm float-right"data-toggle="modal" data-target="#exampleModalCenter">Add</button>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Company Type</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td>{{$company->company_name}}</td>
                                <td>{{$company->company_email}}</td>
                                <td>{{$company->company_type}}</td>
                                <td>{{$company->company_contactPersonPhone}}</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal">Edit</button>
                                    <button class="btn btn-danger btn-sm" id="deleteCompany" data-companyid="{{$company->id}}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                            
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Admin/Modarator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{route('admin.add.company')}}" method="POST">
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
                        <label for="websiteUrl">Website URL</label>
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
</div> 
<!--==================================================>
    End Modal
<====================================================-->

<!--========================================================>
    Delete Modal
<=========================================================-->

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Delete Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are You Sure??
                You Want to Delete this Company...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="{{route('admin.delete.company')}}" method="POST">
                    @csrf
                    <input type="hidden" name="company_id" id="com_id">
                    <button type="submit" class="btn btn-primary">Yes,Delete</button>
                </form>
            </div>
            </div>
        </div>
    </div>

<!--=======================================================>
    Delete Modal End
<=========================================================-->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Admin/Modarator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{route('admin.add.company')}}" method="POST">
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
                        <label for="websiteUrl">Website URL</label>
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
</div> 

<!--=================================================>
    Edit Modal End
<==================================================-->

@endsection

@section('scripts')
    <script src="{{asset('vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('vendor/multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('libs/js/main-js.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('vendor/datatables/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/js/data-table.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

    <script>
        $(document).ready(function(){
            $(document).on('click','#deleteCompany',function(event){
                var company_id = $(this).attr('data-companyid');
                $('#com_id').val(company_id); 
                $('#deleteModal').modal('show');
                console.log(company_id);
            })
        })
    </script>
@endsection