@extends('layouts.admin')
@section('title', 'Chief Complain')

@section('content')
 @include('includes.message')


    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">All Chief Complain</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Chief Complain</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <a href="/chief/complain/create" class="btn btn-success float-right" >+Create Chief Complain</a>
                    <div class="table-responsive">
                        <table class="datatable table table-hover table-center mb-0">
                                       <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Patient ID: activate to sort column ascending" style="width: 70px;">Chief Complain Title</th>
                                            <th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 123px;">Actions</th></tr>
                                        </thead>
                                        <tbody>
                                            @php($i=1)
                                        @foreach($chiefComplain as $data)
                                         <tr role="row" class="odd">
                                            <td class="sorting_1"><a href="#">{{$i++}}</a></td>
                                            <td>{{$data->chief_complain_title}}</td>

                                            <td class="text-right">
                                                <div class="actions">

                                                    <a  href="/chief/complain/edit/{{$data->chief_complain_id}}" class="btn btn-sm bg-success-light mr-2" type="submit">
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a>
                                                    <a class="btn btn-sm bg-danger-light" data-toggle="" href="/chief/complain/destroy/{{$data->chief_complain_id}}">
                                                        <i class="fe fe-trash"></i> Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
