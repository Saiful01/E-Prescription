@extends('layouts.admin')
@section('title', 'View All Patients')

@section('content')
 @include('includes.message')


    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">All Patients</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Patients</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn btn-success float-right" >+Create Patients</a>
                    <div class="table-responsive">
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">#</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">Patients Name</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">Patients Age</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">Patients Blood Group</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">Patients Phone No</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">Gender</th>

                                <th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 123px;">Actions</th></tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                            @foreach($paient as $data)
                                <tr role="row" class="odd">
                                    <td class="sorting_1"><a href="#">{{$i++}}</a></td>
                                    <td class="sorting_1"><a href="#">{{$data->patient_name}}</a></td>
                                    <td class="sorting_1"><a href="#">{{$data->patient_age}}</a></td>
                                    <td class="sorting_1"><a href="#">{{$data->patient_blood_group}}</a></td>
                                    <td class="sorting_1"><a href="#">{{$data->patient_phone_no}}</a></td>
                                    <td class="sorting_1"><a href="#">{{$data->gender}}</a></td>



                                    <td class="text-right">
                                        <div class="actions">
                                            <a  href="/details/page/{{$data->patient_id}}" class="btn btn-sm bg-success-light mr-2" type="submit">
                                                <i class="fe fe-document"></i> View details
                                            </a>

                                            <a  href="#" class="btn btn-sm bg-success-light mr-2" type="submit">
                                                <i class="fe fe-pencil"></i> Edit
                                            </a>
                                            <a class="btn btn-sm bg-danger-light" data-toggle="" href="#">
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
