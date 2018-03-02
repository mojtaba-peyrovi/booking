<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;

class usersController extends Controller
{
    public function getAdminSignup(){
        return view('user.admin-signup');
    }
    public function postAdminSignup(Request $request){
        //form validation
        $this->validate($request,[
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required'
        ]);
        //save in Database
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        Auth::login($user);
        //return
        return redirect()->route('dashboard');
    }
    public function getAdminSignin(){
        return view('user.admin-signin');
    }
    public function postAdminSignin(Request $request){
        //form validation
        $this->validate($request,[
            'email' => 'email|required',
            'password' => 'required'
        ]);
        if(Auth::attempt(['email'=> request('email'),'password' => request('password')])){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
    public function getAdminProfile(){
        $admin = Auth::user();
        return view('user.admin-profile',compact('admin'));
    }
    public function getAdminLogout(){
        Auth::logout();
        return back();
    }
}
