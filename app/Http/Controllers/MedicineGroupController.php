<?php

namespace App\Http\Controllers;

use App\MedicineGroup;
use Illuminate\Http\Request;

class MedicineGroupController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.medicine.medicine_group.create_medicine_group');
    }


    public function store(Request $request)
    {
        MedicineGroup::create($request->except(['_token']));
        return back()->with('success', "Successfully save  ");
    }


    public function show(MedicineGroup $medicineGroup)
    {
        $medicineGroup = MedicineGroup::all();
        return view('admin.medicine.medicine_group.view_medicine_group')->with('medicineGroup',$medicineGroup);
    }


    public function edit($id)
    {
        $data = MedicineGroup::where('medicine_group_id',$id)->first();
        return view('admin.medicine.medicine_group.edit_medicine_group')->with('data',$data);
    }


    public function update(Request $request)
    {
        unset($request['_token']);

        try {
            MedicineGroup::where('medicine_group_id', $request['medicine_group_id'])->update($request->all());
            return back()->with('success', "Successfully Updated ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }

    }


    public function destroy($id)
    {
        try {
            MedicineGroup::where('medicine_group_id', $id)->delete();
            return back()->with('success', "Successfully   Deleted ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }
    }
}
