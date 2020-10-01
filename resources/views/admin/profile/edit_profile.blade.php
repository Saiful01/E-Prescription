@extends('layouts.admin')
@section('title', 'Create Profile')

@section('content')
    @include('includes.message')

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Edit Profile</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Profile Information</h4>
                </div>
                <div class="card-body">
                    <form action="/save/profile" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Full Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="full_name"
                                       value="{{Auth::user()->full_name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">User Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="user_login"
                                       value="{{Auth::user()->user_login}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}"
                                       required>
                            </div>
                        </div>
                        {{--      <div class="form-group row">
                                  <label class="col-form-label col-md-2">Password</label>
                                  <div class="col-md-10">
                                      <input type="password" class="form-control" name="password" value="{{Auth::user()->password}}" required>
                                  </div>
                              </div>--}}
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Profile Image</label>
                            <div class="col-md-10">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2"></label>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
