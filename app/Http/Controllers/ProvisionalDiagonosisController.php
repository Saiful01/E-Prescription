<?php

namespace App\Http\Controllers;

use App\ProvisionalDiagonosis;
use Illuminate\Http\Request;

class ProvisionalDiagonosisController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.settings.provisional_diagonoses.create_provisional_diagonoses');
    }


    public function store(Request $request)
    {
        ProvisionalDiagonosis::create($request->except(['_token']));
        return back()->with('success', "Successfully save  ");
    }


    public function show(ProvisionalDiagonosis $chiefComplain)
    {
        $provisional_diagonoses = ProvisionalDiagonosis::all();
        return view('admin.settings.provisional_diagonoses.view_provisional_diagonoses')->with('provisionalDiagonoses', $provisional_diagonoses);
    }


    public function edit($id)
    {
        $data = ProvisionalDiagonosis::where('provisional_diagonoses_id', $id)->first();
        return view('admin.settings.provisional_diagonoses.edit_provisional_diagonoses')->with('data', $data);
    }


    public function update(Request $request)
    {
        unset($request['_token']);

        try {
            ProvisionalDiagonosis::where('provisional_diagonoses_id', $request['provisional_diagonoses_id'])->update($request->all());
            return back()->with('success', "Successfully Updated ");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }
    public function destroy($id)
    {

        try {
            ProvisionalDiagonosis::where('provisional_diagonoses_id', $id)->delete();
            return back()->with('success', "Successfully   Deleted ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }
    }
}
