@extends('layouts.admin')
@section('title', 'View Details')

@section('content')


    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">All Results</h3>
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
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">Prescription Id</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">Patient Id</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">Invoice Number</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">total patient_medicine_id</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">total patient_tests</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">total chief_complains</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">total investigations</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">total objective_examinations</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">total provisional_diagonosis</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">advise</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">amount</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 113px;">is_paid</th>

                                <th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 123px;">Actions</th></tr>
                            </thead>
                            <tbody>

                                <tr role="row" class="odd">
                                       <td>1</td>
                                       <td>1</td>
                                       <td>1</td>
                                       <td>1</td>
                                       <td>1</td>
                                       <td>1</td>
                                       <td>1</td>
                                       <td>1</td>
                                       <td>1</td>
                                       <td>"hvhjjvjhj"</td>
                                       <td>1</td>
                                       <td>"hhjj"</td>


                                    <td class="text-right">
                                        <div class="actions">
                                            <a  href="#" class="btn btn-sm bg-success-light mr-2" type="submit">
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
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
