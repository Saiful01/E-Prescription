@extends('layouts.admin')
@section('title', 'Prescription')

@section('content')

    <style>

    </style>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Prescription</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Prescription</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <button class="btn btn-success pull-right" onclick="printDiv('printableArea')"><i class="fa fa-print"></i> Print
        </button>

        <div class="row" id="printableArea">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: #9CDBC1;">


                        <img src="/images/logo.png">

                    </div>

                    {{-- <div class="col-md-9">
                         <h4 class="card-title">Pain and Paralysis center</h4>
                         <p>Pain and Paralysis center</p>
                     </div>--}}
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-3">

                        <strong>Name:</strong>
                        <label>Aman Ullah</label>

                    </div>


                    <div class="col-md-3">

                        <strong>Age:</strong>
                        <label>25</label>


                    </div>
                    <div class="col-md-3">


                        <strong>Sex:</strong>
                        <label>Male</label>


                    </div>
                    <div class="col-md-3">
                        <strong>Date:</strong>
                        <label>20.02.2020</label>
                    </div>


                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>CC: </h5>
                            <ul>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <h5>H/O: </h5>
                            <ul>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <h5>O/E: </h5>
                            <ul>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <h5>Investigation: </h5>
                            <ul>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <h5>CC: </h5>
                            <ul>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                            </ul>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Physiotherapy: </h5>
                            <ul>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <h5>Physiotherapy: </h5>
                            <ul>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <h5>Physiotherapy: </h5>
                            <ul>
                                <li>List Of Item</li>
                                <li>List Of Item</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3">
                        <hr>
                       <p style="padding-bottom: 15px"> Signature</p>

                    </div>
                </div>

                    <div class="row" style="background: #BAE6D3;">
                        <div class="col-md-12">
                            <center>
                                R.S.H. Tower, Plot#23,(3rd Floor), Road#3, Block#A, Section#11, Mirpur, Dhaka-1216,
                                bangladesh.<br>
                                Cell: 01768-377 442, Web: www.uppc-bd.org, E-mail: uppc.bd@gmail.com
                            </center>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <script>
            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }
        </script>
@endsection
