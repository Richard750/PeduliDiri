<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('LogOut');
    }

    public function loginPage(){
        return view('login');
    }

    public function Login(Request $request){
        if (Auth::attempt($request->only('name', 'email', 'password'))){
            return redirect('/dashboard');
        }
        return redirect('/')->with('alert', "Login gagal! Periksa kembali Nama & NIK.");
    }

    public function LogOut(){
        Auth::logout();
        return redirect('/');
    }
}
