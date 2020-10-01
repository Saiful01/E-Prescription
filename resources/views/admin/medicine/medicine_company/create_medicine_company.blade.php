@extends('layouts.admin')
@section('title', 'Create Medicine Company')

@section('content')
    @include('includes.message')


    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Create Medicine Company</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Medicine Company</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Medicine Company</h4>
                </div>
                <div class="card-body">
                    <form action="/medicine/company/save" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Medicine Company Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="medicine_company_name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2"></label>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>


@endsection
