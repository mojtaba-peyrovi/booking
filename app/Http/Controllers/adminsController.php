<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Admin;

use Auth;

class adminsController extends Controller
{
    public function getAdminSignup(){
        return view('admin.admin-signup');
    }
    public function postAdminSignup(Request $request){
        //form validation
        $this->validate($request,[
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'email|required|unique:users',
            'birthday' => 'required',
            'address' => 'required',
            'role' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'password' => 'required'
        ]);
        //save in Database
        $admin = Admin::create([
            'FirstName' => request('FirstName'),
            'LastName' => request('LastName'),
            'email' => request('email'),
            'birthday' => request('birthday'),
            'address' => request('address'),
            'role' => request('role'),
            'nationality'=> request('nationality'),
            'gender' => request('gender'),
            'password' => bcrypt(request('password'))
        ]);

        Auth::login($admin);
        //return
        return redirect()->route('dashboard');
    }
    public function getAdminSignin(){
        return view('admin.admin-signin');
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
    public function getAdminLogout(){
        Auth::logout();
        return back();
    }
}
