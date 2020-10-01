@extends('layouts.admin')
@section('title', 'Create Patient Test')

@section('content')
    @include('includes.message')

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Patient Test Create</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Patient Test</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Patient Test</h4>
                </div>
                <div class="card-body">
                    <form action="/patient/test/save" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Patient Test Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="patient_test_name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Patient Test Cost</label>
                            <div class="col-md-10">
                                <input type="number" class="form-control" name="patient_test_cost" required>
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
