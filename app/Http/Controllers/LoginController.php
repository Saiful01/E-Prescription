<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function loginCheck(Request $request){
        $email =$request['email'];
        $password = $request['password'];

        // attempt to  login Check
        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            if (!Auth::user()->is_active) {
                return Redirect::to('/logout');
            }
//            try {
//                LoginHistory::create([
//                    'ip_address' => request()->ip(),
//                    'user_id' => Auth::id()
//                ]);
//            } catch (\Exception $exception) {
//                return $exception->getMessage();
//            }

            return Redirect::to('/dashboard');
        } else {
            return back()->with('failed', "Username or password does not match");

        }
    }
    public  function  logout(){
        Auth::logout();
        return Redirect::to('/login');
    }
}
