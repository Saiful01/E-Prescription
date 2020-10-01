<?php

namespace App\Http\Controllers;

use App\Advise;
use Illuminate\Http\Request;

class AdviseController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.settings.advise.create_advise');
    }


    public function store(Request $request)
    {
        Advise::create($request->except(['_token']));
        return back()->with('success', "Successfully Save  ");
    }


    public function show(Advise $chiefComplain)
    {
        $advise = Advise::all();
        return view('admin.settings.advise.view_advise')->with('advise', $advise);
    }


    public function edit($id)
    {
        $data = Advise::where('advise_id', $id)->first();
        return view('admin.settings.advise.edit_advise')->with('data', $data);
    }


    public function update(Request $request)
    {
        unset($request['_token']);

        try {
            Advise::where('advise_id', $request['advise_id'])->update($request->all());
            return back()->with('success', "Successfully Updated ");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }
    public function destroy($id)
    {

        try {
            Advise::where('advise_id', $id)->delete();
            return back()->with('success', "Successfully   Deleted ");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());

        }
    }
}
