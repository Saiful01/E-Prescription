@extends('layouts.admin')
@section('title', 'View All Prescriptions')

@section('content')


    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">All Prescriptions</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Prescriptions</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <a href="/prescription/create" class="btn btn-success float-right" >+Create Prescriptions</a>
                    <div class="table-responsive">
                        <table class="datatable table table-hover table-center mb-0">
                                       <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">Prescriptions Id</th>
                                            <th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 123px;">Actions</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($prescription as $data)
                                         <tr role="row" class="odd">
                                            <td class="sorting_1"><a href="#">{{$data->prescription_id}}</a></td>

                                            <td class="text-right">
                                                <div class="actions">
                                                    <a  href="/prescription/page/{{$data->prescription_id}}" class="btn btn-sm bg-success-light mr-2" type="submit">
                                                        <i class="fe fe-document"></i> View Prescription
                                                    </a>

                                                    <a  href="/prescription/edit/{{$data->prescription_id}}" class="btn btn-sm bg-success-light mr-2" type="submit">
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a>
                                                    <a class="btn btn-sm bg-danger-light" data-toggle="" href="/prescription/destroy/{{$data->prescription_id}}">
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
