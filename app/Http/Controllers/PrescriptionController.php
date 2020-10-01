<?php

namespace App\Http\Controllers;

use App\ChiefComplain;
use App\Investigation;
use App\ObjectiveExamination;
use App\PatientHistory;
use App\PatientMedicine;
use App\PatientTest;
use App\Prescription;
use App\ProvisionalDiagonosis;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $patient_test = PatientTest::all();
        $chief_complain = ChiefComplain::all();
        $investigation = Investigation::all();
        $objective_examination = ObjectiveExamination::all();
        $provisional_diagonosis = ProvisionalDiagonosis::all();
        $history = PatientHistory::all();
        return view('admin.prescription.create_prescription')
            ->with('patient_test', $patient_test)
            ->with('chief_complain', $chief_complain)
            ->with('investigation', $investigation)
            ->with('objective_examination', $objective_examination)
            ->with('provisional_diagonosis', $provisional_diagonosis)
            ->with('history', $history);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
        /*
                $is_exist = Patient::where('patient_phone_no', $request['phone'])->first();
                if (is_null($is_exist)) {
                    $patient_id = Patient::insertGetId($patient_array);
                } else {
                    $patient_id = $is_exist->patient_id;
                }*/
        $i = 0;

        $medicine_id_array = [];

        foreach ($request['medicine_name'] as $medicine) {

            $medicine_array = [
                'medicine_id' => 1,
                'type' => $request['type'][$i],
                'mg_ml' => $request['mg_ml'][$i],
                'dose' => $request['dose'][$i],
                'day' => $request['day'][$i],
                'comments' => $request['comments'][$i],
            ];
            $i++;
            //Insert Into Patient Medicine Table
            $patient_medicine_id = PatientMedicine::insertGetId($medicine_array);
            $medicine_id_array[] = $patient_medicine_id;
        }


        return json_encode($medicine_id_array);

        $patient_tests = $request['patient_test_name'];
        foreach ($patient_tests as $test) {

        }
        return;
        Prescription::create($request->except(['_token']));
        return back()->with('success', "Successfully save  ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PatientTest $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function show(PatientTest $patientTest)
    {
        $prescription = Prescription::all();
        return view('admin.prescription.view_prescription')->with('prescription', $prescription);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PatientTest $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PatientTest::where('patient_test_id', $id)->first();
        return view('admin.settings.patients_test.edit_patient_tests')->with('data', $data);
    }

    public function prescription_page()
    {
//        $data = Prescription::where('prescription_id',$id)->first();
//        $prescription = Prescription::where('prescription_id',$id)->
//        join('chief_complains','chief_complains.chief_complain_id', '=','prescriptions.chief_complain_id')
//        ->join('investigations','investigations.investigation_id','=','prescriptions.investigation_id')
//        ->join('objective_examinations','objective_examinations.objective_examination_id','=','prescriptions.objective_examination_id')
//        ->join('patient_histories','patient_histories.history_id','=','prescriptions.history_id')
//        ->join('patient_tests','patient_tests.patient_test_id','=','prescriptions.patient_test_id')
//        ->join('provisional_diagonoses','provisional_diagonoses.provisional_diagonoses_id','=','prescriptions.provisional_diagonoses_id')
//         ->first();
//        ->select('chief_complains.chief_complain_title','investigations.investigation_title','objective_examinations.objective_examination_title',
//        'patient_histories.history_title','patient_tests.patient_test_name','provisional_diagonoses.provisional_diagonoses_title')
//    ;
        return view('admin.prescription.prescription_page');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\PatientTest $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        unset($request['_token']);
        try {
            PatientTest::where('patient_test_id', $request['patient_test_id'])->update($request->all());
            return back()->with('success', "Successfully Updated ");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PatientTest $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            PatientTest::where('patient_test_id', $id)->delete();
            return back()->with('success', "Successfully   Deleted ");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }
}
