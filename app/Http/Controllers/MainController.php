<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function login()
    {
        return view('.auth.auth');
    }

    public function register()
    {
        return view('auth.register');
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
                    return redirect('/admin/homepage');
                } else {
                    return redirect('/admin/login')->with('fail','We do not recognize this password');
                }

            }
        }

        public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/admin/homepage')->with('success','You are logged out');
        }
        }
        public function homepage(){
            $paginate=Post::query()
                ->select('title','content','id','full_name')
                ->orderBy('id')
                ->paginate(15);
            $data = ['LoggedUserInfo'=>Login::where('id','=',session('LoggedUser'))->first()];
            $info = Post::all();
            $count=0;
            return view('homepage.homepage',$data,compact('info','paginate','count'));
        }
        public function category(){
        $info = Post::all();
            $data = ['LoggedUserInfo'=>Login::where('id','=',session('LoggedUser'))->first()];
        return view('category.categories',$data,compact('info'));
        }
        public function community(){
            $data = ['LoggedUserInfo'=>Login::where('id','=',session('LoggedUser'))->first()];
            return view('community.community',$data);
        }










}
