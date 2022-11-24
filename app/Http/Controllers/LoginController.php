<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function login(Request $req){
        if(Auth::attempt($req->only('email','password'))){
            return redirect('/companies/data');
        }
        return redirect('/');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}