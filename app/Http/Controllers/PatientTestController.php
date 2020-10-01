<?php

namespace App\Http\Controllers;

use App\PatientTest;
use Illuminate\Http\Request;

class PatientTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.settings.patients_test.create_patient_tests');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        PatientTest::create($request->except(['_token']));
        return back()->with('success', "Successfully save  ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PatientTest  $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function show(PatientTest $patientTest)
    {
        $patientTest = PatientTest::all();
        return view('admin.settings.patients_test.view_patient_tests')->with('patientTest',$patientTest);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PatientTest  $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PatientTest::where('patient_test_id',$id)->first();
        return view('admin.settings.patients_test.edit_patient_tests')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PatientTest  $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        unset($request['_token']);

        try {
            PatientTest::where('patient_test_id', $request['patient_test_id'])->update($request->all());
            return back()->with('success', "Successfully Updated ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PatientTest  $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            PatientTest::where('patient_test_id', $id)->delete();
            return back()->with('success', "Successfully   Deleted ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }
    }
}
