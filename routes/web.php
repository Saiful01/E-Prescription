<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/test', function () {
//    return view('admin.prescription.create_prescription');
//});
Route::get('/', 'LoginController@login');
Route::get('/login', 'LoginController@login');
Route::get('/login-check', 'LoginController@loginCheck');
Route::get('/logout', 'LoginController@logout');

Route::get('/dashboard', 'AdminController@index');
Route::get('/edit/profile', 'AdminController@edit');
Route::post('/save/profile', 'AdminController@update');
Route::get('/view/profile', 'AdminController@view');


//medicine group

Route::get('/medicine/group/view', 'MedicineGroupController@show');
Route::get('/medicine/group/create', 'MedicineGroupController@create');
Route::post('/medicine/group/save', 'MedicineGroupController@store');
Route::get('/medicine/group/edit/{id}', 'MedicineGroupController@edit');
Route::post('/medicine/group/update', 'MedicineGroupController@update');
Route::get('/medicine/group/destroy/{id}', 'MedicineGroupController@destroy');


//medicine company


Route::get('/medicine/company/view', 'MedicineCompanyController@show');
Route::get('/medicine/company/create', 'MedicineCompanyController@create');
Route::post('/medicine/company/save', 'MedicineCompanyController@store');
Route::get('/medicine/company/edit/{id}', 'MedicineCompanyController@edit');
Route::post('/medicine/company/update', 'MedicineCompanyController@update');
Route::get('/medicine/company/destroy/{id}', 'MedicineCompanyController@destroy');


//patient tests
Route::get('/patient/test/view', 'PatientTestController@show');
Route::get('/patient/test/create', 'PatientTestController@create');
Route::post('/patient/test/save', 'PatientTestController@store');
Route::get('/patient/test/edit/{id}', 'PatientTestController@edit');
Route::post('/patient/test/update', 'PatientTestController@update');
Route::get('/patient/test/destroy/{id}', 'PatientTestController@destroy');

///medicine
Route::get('/medicine/view', 'MedicineController@show');
Route::get('/medicine/create', 'MedicineController@create');
Route::post('/medicine/save', 'MedicineController@store');
Route::get('/medicine/edit/{id}', 'MedicineController@edit');
Route::post('/medicine/update', 'MedicineController@update');
Route::get('/medicine/destroy/{id}', 'MedicineController@destroy');


//chief complain

Route::get('/chief/complain/view', 'ChiefComplainController@show');
Route::get('/chief/complain/create', 'ChiefComplainController@create');
Route::post('/chief/complain/save', 'ChiefComplainController@store');
Route::get('/chief/complain/edit/{id}', 'ChiefComplainController@edit');
Route::post('/chief/complain/update', 'ChiefComplainController@update');
Route::get('/chief/complain/destroy/{id}', 'ChiefComplainController@destroy');

//advise
Route::get('/advise/view', 'AdviseController@show');
Route::get('/advise/create', 'AdviseController@create');
Route::post('/advise/save', 'AdviseController@store');
Route::get('/advise/edit/{id}', 'AdviseController@edit');
Route::post('/advise/update', 'AdviseController@update');
Route::get('/advise/destroy/{id}', 'AdviseController@destroy');

//investigation
Route::get('/investigation/view', 'InvestigationController@show');
Route::get('/investigation/create', 'InvestigationController@create');
Route::post('/investigation/save', 'InvestigationController@store');
Route::get('/investigation/edit/{id}', 'InvestigationController@edit');
Route::post('/investigation/update', 'InvestigationController@update');
Route::get('/investigation/destroy/{id}', 'InvestigationController@destroy');

//object Examination
Route::get('/object/examination/view', 'ObjectiveExaminationController@show');
Route::get('/object/examination/create', 'ObjectiveExaminationController@create');
Route::post('/object/examination/save', 'ObjectiveExaminationController@store');
Route::get('/object/examination/edit/{id}', 'ObjectiveExaminationController@edit');
Route::post('/object/examination/update', 'ObjectiveExaminationController@update');
Route::get('/object/examination/destroy/{id}', 'ObjectiveExaminationController@destroy');

//patient history
Route::get('/patient/history/view', 'PatientHistoryController@show');
Route::get('/patient/history/create', 'PatientHistoryController@create');
Route::post('/patient/history/save', 'PatientHistoryController@store');
Route::get('/patient/history/edit/{id}', 'PatientHistoryController@edit');
Route::post('/patient/history/update', 'PatientHistoryController@update');
Route::get('/patient/history/destroy/{id}', 'PatientHistoryController@destroy');

//provisional diagonoses
Route::get('/provisional/diagonoses/view', 'ProvisionalDiagonosisController@show');
Route::get('/provisional/diagonoses/create', 'ProvisionalDiagonosisController@create');
Route::post('/provisional/diagonoses/save', 'ProvisionalDiagonosisController@store');
Route::get('/provisional/diagonoses/edit/{id}', 'ProvisionalDiagonosisController@edit');
Route::post('/provisional/diagonoses/update', 'ProvisionalDiagonosisController@update');
Route::get('/provisional/diagonoses/destroy/{id}', 'ProvisionalDiagonosisController@destroy');

//prescription
Route::get('/prescription/view', 'PrescriptionController@show');
Route::get('/prescription/create', 'PrescriptionController@create');
Route::post('/prescription/save', 'PrescriptionController@store');
Route::get('/prescription/edit/{id}', 'PrescriptionController@edit');
Route::get('/prescription/page', 'PrescriptionController@prescription_page');
Route::post('/prescription/update', 'PrescriptionController@update');
Route::get('/prescription/destroy/{id}', 'PrescriptionController@destroy');

////patients////
Route::get('/patient/view', 'PatientController@index');
Route::get('/details/page/{id}', 'PatientController@details');




//forget password

Route::get('/forget-password', 'AdminController@emailCheck');
Route::get('/enter-password', 'AdminController@passwordCheck');
