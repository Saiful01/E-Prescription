@extends('layouts.admin')
@section('title', 'Create Medicine Company')

@section('content')
    @include('includes.message')

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Basic Inputs</h3>
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
                    <h4 class="card-title">Medicine Group</h4>
                </div>
                <div class="card-body">
                    <form action="/medicine/company/update" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Medicine Group Name</label>
                            <div class="col-md-10">
                                <input  hidden type="text" class="form-control" name="medicine_company_id" value="{{$data->medicine_company_id}}">

                                <input type="text" class="form-control" name="medicine_company_name" value="{{$data->medicine_company_name}}">
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
