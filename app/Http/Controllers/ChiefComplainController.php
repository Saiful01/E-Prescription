<?php

namespace App\Http\Controllers;

use App\ChiefComplain;
use Illuminate\Http\Request;

class ChiefComplainController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.settings.chief_complain.create_chief_complain');
    }


    public function store(Request $request)
    {
        ChiefComplain::create($request->except(['_token']));
        return back()->with('success', "Successfully save  ");
    }


    public function show(ChiefComplain $chiefComplain)
    {
        $chiefComplain = ChiefComplain::all();
        return view('admin.settings.chief_complain.view_chief_complain')->with('chiefComplain', $chiefComplain);
    }


    public function edit($id)
    {
        $data = ChiefComplain::where('chief_complain_id', $id)->first();
        return view('admin.settings.chief_complain.edit_chief_complain')->with('data', $data);
    }


    public function update(Request $request)
    {
        unset($request['_token']);

        try {
            ChiefComplain::where('chief_complain_id', $request['chief_complain_id'])->update($request->all());
            return back()->with('success', "Successfully Updated ");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }
    public function destroy($id)
    {

        try {
            ChiefComplain::where('chief_complain_id', $id)->delete();
            return back()->with('success', "Successfully   Deleted ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }
    }
}
