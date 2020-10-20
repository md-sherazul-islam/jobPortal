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
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="rr">
                        
                            
                            
                            
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
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Admin/Modarator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addUser" action="{{route('add.user')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;">Name</label>
                        <input type="text" class="form-control" name="name" id="" placeholder="Name">
                        </div>

                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;">Email</label>
                        <input type="email" class="form-control" name="email" id="" placeholder="Email">
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;">Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="" placeholder="Phone Number">
                        </div>

                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;">Role</label>
                            <select class="form-control" name="role" id="role">
                                <option selected>Choose Role ...</option>
                                <option value="admin">Admin</option>
                                <option value="modarator">Modarator</option>
                            </select>
                        </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;">Password</label>
                        <input type="Password" class="form-control" name="password" id="" placeholder=" Password">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;"> Confirm Password</label>
                        <input type="Password" class="form-control" name="confirm_password" id="" placeholder="Confirm Password">
                        </div>
                    </div>

                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<!--==================================================>
    End Modal
<====================================================-->

<!-- Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure?
        You want to delete this user...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="confirmUserDelete">Yes,Delete</button>
      </div>
    </div>
  </div>
</div>
<!--============================================>
    User Delete Modal End
<=============================================-->

<!--Edit Modal -->
<div class="modal fade" id="editModal"  role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update Admin/Modarator Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateUser" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>

                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;">Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                        </div>

                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;">Role</label>
                            <select class="form-control" name="role" id="role">
                                <option selected>Choose Role ...</option>
                                <option value="admin">Admin</option>
                                <option value="modarator">Modarator</option>
                            </select>
                        </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;">Password</label>
                        <input type="Password" class="form-control" name="password" id="" placeholder=" Password">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="" style="color: #fff;"> Confirm Password</label>
                        <input type="Password" class="form-control" name="confirm_password" id="" placeholder="Confirm Password">
                        </div>
                    </div>

                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"  >Submit</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<!--==================================================>
    End Edit Modal
<====================================================-->


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
            getUsers();
            function getUsers(){
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : "{{ route('get.users') }}",
                    method: "get",
                    //data: {course_id: course_id},

                    success:function(data){
            
                        $('#rr').html(data);
                    }
                })
            }
            

            $(document).on('click','#deleteUser',function(event){
                event.preventDefault();
                var userID=$(this).attr('data-userid')
                console.log(userID);
                $('#deleteUserModal').modal('show');
                $(document).on('click','#confirmUserDelete',function(e){
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url : "{{ route('delete.user') }}",
                        method: "post",
                        data: {user_id: userID},

                        success:function(data){
                            getUsers();
                            $('#deleteUserModal').modal('hide');
                            console.log(data);
                        }
                    });
                })
                
            });

            $(document).on('click','#editUser',function(event){
                event.preventDefault();
                var id = $(this).attr('data-id');
                var userName = $(this).attr('data-username');
                var userEmail = $(this).attr('data-useremail');
                var userRole = $(this).attr('data-userrole');
                var userPhone = $(this).attr('data-userphone');
                console.log(userName,userEmail,userRole,userPhone);
                
                $('#name').val(userName);
                $('#email').val(userEmail);
                $('#phone').val(userPhone);
                $('#role').val(userRole);
                
                $('#editModal').modal('show');

                $(document).on('submit','#updateUser',function(event){
                    event.preventDefault();
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var phone = $('#phone').val();
                    var role = $('#role').val();
                    console.log(name,email,phone,role);
                    
                    
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url : "{{ route('update.user') }}",
                        method: "post",
                        data: {id: id ,name: name, email:email,phone:phone,role:role},
                        
                        success:function(data){
                            getUsers();
                            $('#editModal').modal('hide');
                            console.log(data);
                        }
                    });  
                })
            })
        })
    </script>
@endsection