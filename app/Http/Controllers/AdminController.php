<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function edit()
    {
        return view('admin.profile.edit_profile');
    }


    public function update(Request $request)
    {
        //return $request->all();

        unset($request['_token']);

        if ($request->hasFile('image')) {


            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/user');
            $image->move($destinationPath, $image_name);
            $request['profile_pic'] = $image_name;

        }


        try {
            User::where('id', Auth::user()->id)->update($request->except(['image']));
            return back()->with('success', "Successfully Updated ");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }


    public function view()
    {
        return view('admin.profile.view_profile');
    }
    public function emailCheck()
    {
        return view('forget_password.enter_email');
    }
    public function passwordCheck()
    {
        return view('forget_password.password');
    }


}
