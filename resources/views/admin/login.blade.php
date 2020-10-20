@extends('layouts.master')
@section('contentSection')
<div class="row justify-content-center">
    <div class="col sm-12 col-md-6 col-lg-6">
        <div class="card my-3">
            <div class="card-header bg-primary">Admin Login</div>
            <div class="card-body">
                <form action="{{route('admin.login')}}" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <input class="form-control" type="email" placeholder="Username,Email or Phone Number" name="email">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" type="password" placeholder="Password" name="password">
                    </div>
                    
                    <div class="form-group fid">
                    <a href="#"><span>Forget User ID / Password ? </span></a>
                    <a> <button type="submit" class="btn float-right btn-primary">Submit </button></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection