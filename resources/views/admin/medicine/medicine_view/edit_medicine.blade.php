@extends('layouts.admin')
@section('title', 'Edit Medicine')

@section('content')
    @include('includes.message')

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Medicine Edit</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Medicine</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Medicine</h4>
                </div>
                <div class="card-body">
                    <form action="/medicine/update" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Medicine Name</label>
                            <div class="col-md-10">
                                <input hidden type="text" class="form-control" name="medicine_id"
                                       value="{{$data->medicine_id}}">

                                <input type="text" class="form-control" name="medicine_name"
                                       value="{{$data->medicine_name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Medicine Company</label>
                            <div class="col-md-10">
                                <select class="form-control" name="medicine_company_id">
                                    <option>-- Select --</option>
                                    @foreach($companies as $company)
                                        <option @if($data->medicine_company_id==$company->medicine_company_id)selected
                                                @endif value="{{$company->medicine_company_id}}">{{$company->medicine_company_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Medicine Group</label>
                            <div class="col-md-10">
                                <select class="form-control" name="medicine_group_id">
                                    <option>-- Select --</option>
                                    @foreach($groups as $group)
                                        <option @if($data->medicine_group_id==$group->medicine_group_id)selected
                                                @endif value="{{$group->medicine_group_id}}">{{$group->medicine_group_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Medcine Description</label>
                            <div class="col-md-10">
                                <textarea rows="5" cols="5" class="form-control"
                                          placeholder="Enter text here" name="medicine_description">{{$data->medicine_description}}</textarea>
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
