<?php

namespace App\Http\Controllers;

use App\MedicineCompany;
use Illuminate\Http\Request;

class MedicineCompanyController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.medicine.medicine_company.create_medicine_company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        MedicineCompany::create($request->except(['_token']));
        return back()->with('success', "Successfully save  ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicineCompany  $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineCompany $medicineCompany)
    {
        $medicineCompany = MedicineCompany::all();
        return view('admin.medicine.medicine_company.view_medicine_company')->with('medicineCompany',$medicineCompany);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicineCompany  $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = MedicineCompany::where('medicine_company_id',$id)->first();
        return view('admin.medicine.medicine_company.edit_medicine_company')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicineCompany  $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        unset($request['_token']);

        try {
            MedicineCompany::where('medicine_company_id', $request['medicine_company_id'])->update($request->all());
            return back()->with('success', "Successfully Updated ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicineCompany  $medicineCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            MedicineCompany::where('medicine_company_id', $id)->delete();
            return back()->with('success', "Successfully   Deleted ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }
    }
}
