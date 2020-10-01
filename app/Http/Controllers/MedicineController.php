<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\MedicineCompany;
use App\MedicineGroup;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $company = MedicineCompany::all();
        $group = MedicineGroup::all();
        return view('admin.medicine.medicine_view.create_medicine')
            ->with('company', $company)
            ->with('group', $group);
    }

    public function store(Request $request)
    {

        Medicine::create($request->except(['_token']));
        return back()->with('success', "Successfully save  ");
    }


    public function show(Medicine $medicineCompany)
    {
        $medicineCompany = Medicine::
        join('medicine_groups', 'medicine_groups.medicine_group_id', '=', 'medicines.medicine_group_id')
            ->join('medicine_companies', 'medicine_companies.medicine_company_id', '=', 'medicines.medicine_company_id')
            ->select('medicine_companies.medicine_company_name',
                'medicine_groups.medicine_group_name',
                'medicines.*')
            ->get();
        return view('admin.medicine.medicine_view.view_medicine')->with('medicine', $medicineCompany);
    }

    public function edit($id)
    {

        $data = Medicine::where('medicine_id', $id)->first();

        $company = MedicineCompany::all();
        $group = MedicineGroup::all();
        return view('admin.medicine.medicine_view.edit_medicine')->with('data', $data)
            ->with('companies', $company)
            ->with('groups', $group);


    }


    public function update(Request $request)
    {
        unset($request['_token']);

        try {
            Medicine::where('medicine_id', $request['medicine_id'])->update($request->all());
            return back()->with('success', "Successfully Updated ");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }

    }

    public function destroy($id)
    {
        try {
            Medicine::where('medicine_id', $id)->delete();
            return back()->with('success', "Successfully   Deleted ");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }
}
