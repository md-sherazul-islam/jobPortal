@extends('layouts.admin')
@section('content')
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="col-md-6 float-left">Categories Table</h5>
                <button class="btn btn-primary btn-sm float-right"data-toggle="modal" data-target="#exampleModalCenter">Add</button>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <th> {{$category->id}} </th>
                                <th> {{$category->catagory_name}} </th>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-cat_id="{{$category->id}}" data-catname="{{$category->catagory_name}}" id="editCategoryModal">Edit</button>
                                    <button class="btn btn-danger btn-sm" data-cat_id="{{$category->id}}" id="deleteCategory" >Delete</button>
                                </td>
                            </tr>
                        @endforeach
                            
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Category</th>
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
    
    <!-- ============================================================== -->
    <!-- Add Categories Modal -->
    <!-- ============================================================== --> 
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.add.category') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="category"> Category Name </label>
                            <input type="text" class="form-control" name="category_name" id="category" placeholder="Category Name">
                        </div>

                        <button class="btn btn-primary float-right" type="submit">Add Category</button>
                    </form>
                </div>
            
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- Add Categoris Modal End -->
    <!-- ============================================ -->

    <!-- Edit Category Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.edit.category') }}" method="POST">
                        @csrf
                        <input type="hidden" name="cat_id" id="catid">
                        <div class="form-group">
                            <label for="editcategory"> Category Name </label>
                            <input type="text" class="form-control" name="category_name" id="editcategory" placeholder="Category Name">
                        </div>

                        <button class="btn btn-primary float-right" type="submit">Add Category</button>
                    </form>
                </div>
            
            </div>
        </div>
    </div>
    <!-- ==================================== -->
    <!-- Edit Category Modal End -->
    <!-- ==================================== -->

    <!-- ================================================ -->
    <!-- Delete Categories Modal -->
    <!-- ================================================ -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Are You Sure ??</h4>
                    <p>You Want to delete this category ... </p>
                    <form action="{{ route('admin.delete.category') }}" method="POST">
                        @csrf
                        <input type="hidden" name="cat_id" id="delcatid">
                        <button class="btn btn-primary float-right" type="submit">Delete Category</button>
                    </form>
                </div>
            
            </div>
        </div>
    </div>

    <!-- ================================================ -->
    <!-- Delete Categories Modal End -->
    <!-- ================================================ -->

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
            $(document).on('click','#editCategoryModal',function(event){
                var cat_id = $(this).attr('data-cat_id');
                var cat_name = $(this).attr('data-catname');

                console.log(cat_name)
                $('#catid').val(cat_id); 
                $('#editcategory').val(cat_name);
                $('#editModal').modal('show');
                
            })

            $(document).on('click','#deleteCategory',function(event){
                var cat_id = $(this).attr('data-cat_id');
                $('#delcatid').val(cat_id);
                $('#deleteModal').modal('show');
            })
        })
    </script>
@endsection