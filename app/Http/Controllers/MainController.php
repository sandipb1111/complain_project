<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function login()
    {
        return view('.auth.auth');
    }

    public function register()
    {
        return view('.auth.register');
    }

    public function check(Request $request)
    {

        //validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);

        $userInfo = Login::where('email', '=', $request->email)->first();
        if (!$userInfo) {
            //check email
            return redirect('/admin/login')->with('fail','We do not recognize this email');
        } else {
                //check password
                if ($userInfo->password == $request->password) {
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('/admin/post');
                } else {
                    return redirect('/admin/login')->with('fail','We do not recognize this password');
                }

            }
        }

        public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/admin/login')->with('success','You are logged out');
        }
        }








}
