@extends('layouts.admin')
@section('title', 'Edit Chief Complain')

@section('content')
    @include('includes.message')

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Chief Complain Edit</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Chief Complain</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chief Complain</h4>
                </div>
                <div class="card-body">
                    <form action="/chief/complain/update" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Chief Complain Title</label>
                            <div class="col-md-10">
                                <input  hidden type="text" class="form-control" name="chief_complain_id" value="{{$data->chief_complain_id}}">

                                <input type="text" class="form-control" name="chief_complain_title" value="{{$data->chief_complain_title}}">
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
