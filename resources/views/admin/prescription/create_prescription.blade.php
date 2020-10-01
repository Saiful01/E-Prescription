@extends('layouts.admin')
@section('title', 'Create Prescription')

@section('content')

    @include('includes.message')


    <!-- Page Header -->
    {{--    <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Create Prescription</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Prescription</li>
                    </ul>
                </div>
            </div>
        </div>--}}
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {{--<div class="card-header">
                    <h4 class="card-title">Create Prescription</h4>
                </div>--}}
                <div class="card-body" ng-controller="prescriptionController">
                    <form action="/prescription/save" method="post">

                        <h4 class="card-title">Patient Information</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="patient_name">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Blood Group</label>
                                    <select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true"
                                            name="patient_blood_group">
                                        <option>Select</option>
                                        <option value="A+">A+</option>
                                        <option value="O+">O+</option>
                                        <option value="B+">B+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="O-">O-</option>
                                        <option value="A-">A-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="number" class="form-control" name="patient_age">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Phone No</label>
                                    <input type="text" class="form-control" name="patient_phone_no">
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="d-block">Gender:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_male"
                                               value="male">
                                        <label class="form-check-label" for="gender_male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_female"
                                               value="female">
                                        <label class="form-check-label" for="gender_female">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_others"
                                               value="others">
                                        <label class="form-check-label" for="gender_others">Others</label>
                                    </div>
                                </div>

                            </div>


                        </div>


                        <h4 class="card-title">Prescription Information</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Medicine</label>
                                <div>
                                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                                    {{--                                    <input type="text" class="form-control" name="medicine_name">--}}
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="row" ng-repeat="fieldGroup in medicineGroup">

                                                <div class="col-md-1">
                                                    <div class="form-group">

                                                        <input type="text" class="form-control" name="type[]"
                                                               placeholder="Type">

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">

                                                        {{--<input type="text" class="form-control" name="medicine_name[]"
                                                               placeholder="Medicine Name">--}}

                                                        <input type="text" name="country" id="country"
                                                               ng-model="country" ng-keyup="complete(country)"
                                                               class="form-control"/>
                                                        <ul class="list-group" ng-model="hidethis" ng-hide="hidethis">
                                                            <li class="list-group-item"
                                                                ng-repeat="countrydata in filterCountry"
                                                                ng-click="fillTextbox(countrydata)">@{{countrydata}}
                                                            </li>
                                                        </ul>


                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="mg_ml[]"
                                                               placeholder="Mg/Ml">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">

                                                        <input type="text" class="form-control" name="dose[]"
                                                               placeholder="Dose">
                                                    </div>

                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">

                                                        <input type="number" class="form-control" name="day[]"
                                                               placeholder="Day">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">

                                                        <input type="text" class="form-control" name="comments[]"
                                                               placeholder="Comments">
                                                    </div>
                                                </div>

                                                <div class="col-md-1 col-2">
                                                    <div class="form-group">

                                                        <button type="button" class="btn btn-danger btn-block"
                                                                ng-click="deleteMedicine(fieldGroup)">-
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-1">
                                            <div class="form-group">


                                                <a href="#" class="btn btn-primary btn-block"
                                                   ng-click="cloneMedicine(fieldGroup)">+</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-10">
                                <label>Patient Test</label>
                                <div class="form-group" ng-repeat="fieldGroup in patientTestGroup">

                                    <input type="text" class="form-control" placeholder="Patient Test"
                                           name="patient_test_name[]" ng-model="fieldGroup.patient_test_name">
                                </div>
                            </div>
                            <div class="col-md-1 col-2">
                                <div class="form-group" ng-repeat="fieldGroup in patientTestGroup">

                                    <button type="button" class="btn btn-danger btn-block"
                                            ng-click="deletePatientTest(fieldGroup)" style="margin-top: 30px">-
                                    </button>

                                </div>
                            </div>


                            <div class="col-md-1 col-2">
                                <div class="form-group">

                                    <button type="button" class="btn btn-primary btn-block"
                                            ng-click="clonePatientTest(fieldGroup)" style="margin-top: 33px">+
                                    </button>

                                </div>
                            </div>


                            <div class="col-md-4 col-10">
                                <label>Chief Complain</label>
                                <div class="form-group" ng-repeat="fieldGroup in chiefComplainGroup">

                                    <input type="text" class="form-control" placeholder="Chief Complain"
                                           name="chief_complain_title[]" ng-model="fieldGroup.chief_complain_title">
                                </div>
                            </div>

                            <div class="col-md-1 col-2">
                                <div class="form-group" ng-repeat="fieldGroup in chiefComplainGroup">

                                    <button type="button" class="btn btn-danger btn-block"
                                            ng-click="deleteChiefComplain(fieldGroup)" style="margin-top: 30px">-
                                    </button>

                                </div>
                            </div>


                            <div class="col-md-1 col-2">
                                <div class="form-group">

                                    <button type="button" class="btn btn-primary btn-block"
                                            ng-click="cloneChiefComplain(fieldGroup)" style="margin-top: 33px">+
                                    </button>

                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-4 col-10">
                                <label>Investigation</label>
                                <div class="form-group" ng-repeat="fieldGroup in investigationGroup">

                                    <input type="text" class="form-control" placeholder="Investigation"
                                           name="investigation_title[]" ng-model="fieldGroup.Investigation_title">

                                </div>
                            </div>

                            <div class="col-md-1 col-2">
                                <div class="form-group" ng-repeat="fieldGroup in investigationGroup">

                                    <button type="button" class="btn btn-danger btn-block"
                                            ng-click="deleteInvestigation(fieldGroup)" style="margin-top: 30px">-
                                    </button>

                                </div>
                            </div>

                            <div class="col-md-1 col-2">
                                <div class="form-group">


                                    <button type="button" class="btn btn-primary btn-block"
                                            ng-click="cloneInvestigation(fieldGroup)" style="margin-top: 33px">+
                                    </button>

                                </div>
                            </div>


                            <div class="col-md-4 col-10">
                                <label>Objective Examination</label>

                                <div class="form-group" ng-repeat="fieldGroup in objectiveExaminationGroup">


                                    <input type="text" class="form-control" placeholder="Objective Examination"
                                           name="objective_examination_title[]"
                                           ng-model="fieldGroup.objective_examination_title">

                                </div>
                            </div>

                            <div class="col-md-1 col-2">
                                <div class="form-group" ng-repeat="fieldGroup in objectiveExaminationGroup">

                                    <button type="button" class="btn btn-danger btn-block"
                                            ng-click="deleteObjectiveExamination(fieldGroup)" style="margin-top: 30px">-
                                    </button>

                                </div>
                            </div>
                            <div class="col-md-1 col-2">
                                <div class="form-group">

                                    <button type="button" class="btn btn-primary btn-block"
                                            ng-click="cloneObjectiveExamination(fieldGroup)" style="margin-top: 33px">+
                                    </button>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-10">
                                <label>Provisional Diagnosis</label>
                                <div class="form-group" ng-repeat="fieldGroup in provisionalDiagnosisGroup">


                                    <input type="text" class="form-control" placeholder="Provisional Diagnosis"
                                           name="provisional_diagonoses_title[]"
                                           ng-model="fieldGroup.provisional_diagonoses_title">

                                </div>
                            </div>
                            <div class="col-md-1 col-2">
                                <div class="form-group" ng-repeat="fieldGroup in provisionalDiagnosisGroup">

                                    <button type="button" class="btn btn-danger btn-block"
                                            ng-click="deleteProvisionalDiagnosis(fieldGroup)" style="margin-top: 30px">-
                                    </button>

                                </div>
                            </div>
                            <div class="col-md-1 col-2">
                                <div class="form-group">


                                    <button type="button" class="btn btn-primary btn-block"
                                            ng-click="cloneProvisionalDiagnosis(fieldGroup)" style="margin-top: 33px">+
                                    </button>

                                </div>
                            </div>

                            <div class="col-md-4 col-10">
                                <label>Patient History</label>
                                <div class="form-group" ng-repeat="fieldGroup in patientHistoryGroup">

                                    <input type="text" class="form-control" placeholder="Patient History"
                                           name="history_title[]" ng-model="fieldGroup.history_title">

                                </div>
                            </div>
                            <div class="col-md-1 col-2">
                                <div class="form-group" ng-repeat="fieldGroup in patientHistoryGroup">

                                    <button type="button" class="btn btn-danger btn-block"
                                            ng-click="deletePatientHistory(fieldGroup)" style="margin-top: 30px">-
                                    </button>

                                </div>
                            </div>
                            <div class="col-md-1 col-2">
                                <div class="form-group">

                                    <button type="button" class="btn btn-primary btn-block"
                                            ng-click="clonePatientHistory(fieldGroup)" style="margin-top: 33px">+
                                    </button>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Advise</label>
                                    <div class="col-md-10">
                                        <textarea rows="2" cols="5" class="form-control" placeholder="Enter text here"
                                                  name="advise"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Create Prescription</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script>

        var app = angular.module('prescriptionApp', []);
        app.controller('prescriptionController', function ($scope, $http) {

            $scope.medicine_name = [
                "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"
            ];
            $scope.complete = function (string) {
                $scope.hidethis = false;
                var output = [];
                angular.forEach($scope.medicine_name, function (country) {
                    if (country.toLowerCase().indexOf(string.toLowerCase()) >= 0) {
                        output.push(country);
                    }
                });
                $scope.filterCountry = output;
            }
            $scope.fillTextbox = function (string) {
                $scope.country = string;
                $scope.hidethis = true;
            }


            $scope.fieldGroups = [
                {
                    'totalPerson': '',
                    'extra': '',
                    'charge': '',
                    'info': '',
                }
            ];
            $scope.cloneMaha = function () {
                $scope.fieldGroups.push({});
            }
            $scope.deleteMaha = function (fieldGroup) {
                var index = $scope.fieldGroups.indexOf(fieldGroup);
                $scope.fieldGroups.splice(index, 1);
            }


            //Provisional Diagnosis

            $scope.provisionalDiagnosisGroup = [
                {
                    'provisional_diagonoses_title': '',

                }
            ];
            $scope.cloneProvisionalDiagnosis = function () {

                console.log("ggggg");
                $scope.provisionalDiagnosisGroup.push({});
            };

            $scope.deleteProvisionalDiagnosis = function (fieldGroup) {
                var index = $scope.provisionalDiagnosisGroup.indexOf(fieldGroup);
                $scope.provisionalDiagnosisGroup.splice(index, 1);
            };

            //Patient Test Group
            $scope.patientTestGroup = [
                {
                    'patient_test_name': '',

                }
            ];

            $scope.clonePatientTest = function () {

                console.log("ggggg");
                $scope.patientTestGroup.push({});
            };

            $scope.deletePatientTest = function (fieldGroup) {
                var index = $scope.patientTestGroup.indexOf(fieldGroup);
                $scope.patientTestGroup.splice(index, 1);
            };
            $scope.chiefComplainGroup = [
                {
                    'chief_complain_title': '',

                }
            ];

            $scope.cloneChiefComplain = function () {

                console.log("ggggg");
                $scope.chiefComplainGroup.push({});
            };

            $scope.deleteChiefComplain = function (fieldGroup) {
                var index = $scope.chiefComplainGroup.indexOf(fieldGroup);
                $scope.chiefComplainGroup.splice(index, 1);
            };

            $scope.investigationGroup = [
                {
                    'investigation_title': '',

                }
            ];

            $scope.cloneInvestigation = function () {

                console.log("ggggg");
                $scope.investigationGroup.push({});
            };

            $scope.deleteInvestigation = function (fieldGroup) {
                var index = $scope.investigationGroup.indexOf(fieldGroup);
                $scope.investigationGroup.splice(index, 1);
            };


            $scope.objectiveExaminationGroup = [
                {
                    'investigation_title': '',

                }
            ];

            $scope.cloneObjectiveExamination = function () {

                console.log("ggggg");
                $scope.objectiveExaminationGroup.push({});
            };

            $scope.deleteObjectiveExamination = function (fieldGroup) {
                var index = $scope.objectiveExaminationGroup.indexOf(fieldGroup);
                $scope.objectiveExaminationGroup.splice(index, 1);
            };
            $scope.patientHistoryGroup = [
                {
                    'history_title': '',

                }
            ];

            $scope.clonePatientHistory = function () {

                console.log("ggggg");
                $scope.patientHistoryGroup.push({});
            };

            $scope.deletePatientHistory = function (fieldGroup) {
                var index = $scope.patientHistoryGroup.indexOf(fieldGroup);
                $scope.patientHistoryGroup.splice(index, 1);
            }


            //Clone Medicine
            $scope.medicineGroup = [
                {
                    'type': '',
                    'medicine_name': '',
                    'mg_ml': '',
                    'dose': '',
                    'day': '',
                    'comments': '',

                }
            ];
            $scope.cloneMedicine = function () {

                console.log("ggggg");
                $scope.medicineGroup.push({});
            };

            $scope.deleteMedicine = function (fieldGroup) {
                var index = $scope.medicineGroup.indexOf(fieldGroup);
                $scope.medicineGroup.splice(index, 1);
            }

        });


    </script>



@endsection
