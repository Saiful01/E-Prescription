<?php

namespace App\Http\Controllers;

use App\Investigation;
use Illuminate\Http\Request;

class InvestigationController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.settings.investigation.create_investigation');
    }


    public function store(Request $request)
    {
        Investigation::create($request->except(['_token']));
        return back()->with('success', "Successfully save  ");
    }


    public function show(Investigation $chiefComplain)
    {
        $investigation = Investigation::all();
        return view('admin.settings.investigation.view_investigation')->with('investigation', $investigation);
    }


    public function edit($id)
    {
        $data = Investigation::where('investigation_id', $id)->first();
        return view('admin.settings.investigation.edit_investigation')->with('data', $data);
    }


    public function update(Request $request)
    {
        unset($request['_token']);

        try {
            Investigation::where('investigation_id', $request['investigation_id'])->update($request->all());
            return back()->with('success', "Successfully Updated ");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }

    public function destroy($id)
    {

        try {
            Investigation::where('investigation_id', $id)->delete();
            return back()->with('success', "Successfully   Deleted ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }
    }
}
