<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="/assets/css/feathericon.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="/assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="/assets/css/select2.min.css"/>

    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">


    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.min.js"></script>
    <script src="/assets/js/respond.min.js"></script>


    <script>
        //var app = angular.module('prescriptionApp', []);


    </script>
    <![endif]-->
</head>
<body ng-app="prescriptionApp">

@include('includes.header')
@include('includes.sidebar')
<!-- Main Wrapper -->

<div class="page-wrapper">

    <div class="content container-fluid">
        @yield('content')
    </div>
</div>

<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="/assets/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables/datatables.min.js"></script>

<script src="/assets/plugins/raphael/raphael.min.js"></script>
{{--<script src="/assets/plugins/morris/morris.min.js"></script>
<script src="/assets/js/chart.morris.js"></script>--}}
<script src="/assets/js/select2.min.js"></script>
<!-- Custom JS -->
<script src="/assets/js/script.js"></script>

</body>
</html>
