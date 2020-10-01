@extends('layouts.admin')
@section('title', 'Edit Provisional Diagonoses')

@section('content')

    @include('includes.message')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Provisional Diagonoses Edit</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Provisional Diagonoses</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Provisional Diagonoses</h4>
                </div>
                <div class="card-body">
                    <form action="/provisional/diagonoses/update" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Provisional Diagonoses Title</label>
                            <div class="col-md-10">
                                <input  hidden type="text" class="form-control" name="provisional_diagonoses_id" value="{{$data->provisional_diagonoses_id}}">

                                <input type="text" class="form-control" name="provisional_diagonoses_title" value="{{$data->provisional_diagonoses_title}}">
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
