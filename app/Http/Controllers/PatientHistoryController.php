<?php

namespace App\Http\Controllers;

use App\PatientHistory;
use Illuminate\Http\Request;

class PatientHistoryController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.settings.patient_history.create_patient_history');
    }


    public function store(Request $request)
    {
        PatientHistory::create($request->except(['_token']));
        return back()->with('success', "Successfully save  ");
    }


    public function show(PatientHistory $chiefComplain)
    {
        $patient_history = PatientHistory::all();
        return view('admin.settings.patient_history.view_patient_history')->with('patientHistory', $patient_history);
    }


    public function edit($id)
    {
        $data = PatientHistory::where('history_id', $id)->first();
        return view('admin.settings.patient_history.edit_patient_history')->with('data', $data);
    }


    public function update(Request $request)
    {
        unset($request['_token']);

        try {
            PatientHistory::where('history_id', $request['history_id'])->update($request->all());
            return back()->with('success', "Successfully Updated ");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }
    public function destroy($id)
    {

        try {
            PatientHistory::where('history_id', $id)->delete();
            return back()->with('success', "Successfully   Deleted ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }
    }
}
