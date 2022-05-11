<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function halamanRegister(){
        return view('register');
    }

    public function simpanRegister(Request $request){
        
        $request->validate(
            [
                'nik'=>'required|unique:users,email',
                'name'=>'required'
            ],
            [
                'nik.required'=>'NIK tidak boleh kosong.',
                'nik.unique'=>'NIK Terdaftar.',
                'name.required'=>'Nama tidak boleh kosong'
            ]
        );

        $data=[
            'name'=>$request->name,
            'email'=>$request->nik,
            'password'=>bcrypt($request->nik)
        ];

        User::create($data);
        return redirect('/register')->with('success', "Registrasi berhasil. Silahkan login!");
    }
}
