<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Author;

class AdminController extends Controller
{
    public function login(){
        return view('backend.pages.login');
    }
    public function loginAction(Request $request){
        $this->validate($request,
            [
                'uname'=>'required',
                'pname'=>'required',
            ],
            [],
            [
                'uname'=>'username',
            ]
        );
        $username=$request->uname;
        $password=$request->pname;
        if(Auth::attempt(['email'=>$username,'password'=>$password])){
            return redirect()->intended(route('Dashboard'));
        }
        else{
            return redirect()->route('Login')->with('error','Invalid username or password');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('Login');
    }
}
