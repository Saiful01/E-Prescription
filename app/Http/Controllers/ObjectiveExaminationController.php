<?php

namespace App\Http\Controllers;

use App\ObjectiveExamination;
use Illuminate\Http\Request;

class ObjectiveExaminationController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.settings.object_examination.create_object_examination');
    }


    public function store(Request $request)
    {
        ObjectiveExamination::create($request->except(['_token']));
        return back()->with('success', "Successfully save  ");
    }


    public function show(ObjectiveExamination $chiefComplain)
    {
        $object_examination = ObjectiveExamination::all();
        return view('admin.settings.object_examination.view_object_examination')->with('objectExamination', $object_examination);
    }


    public function edit($id)
    {
        $data = ObjectiveExamination::where('objective_examination_id', $id)->first();
        return view('admin.settings.object_examination.edit_object_examination')->with('data', $data);
    }


    public function update(Request $request)
    {
        unset($request['_token']);

        try {
            ObjectiveExamination::where('objective_examination_id', $request['objective_examination_id'])->update($request->all());
            return back()->with('success', "Successfully Updated ");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }
    public function destroy($id)
    {

        try {
            ObjectiveExamination::where('objective_examination_id', $id)->delete();
            return back()->with('success', "Successfully   Deleted ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }
    }
}
