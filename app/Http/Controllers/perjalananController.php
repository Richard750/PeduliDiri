<?php

namespace App\Http\Controllers;

use App\Models\perjalanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class perjalananController extends Controller
{
    
    public function index(){
        $data = DB::table('perjalanans')
        ->join('users', 'users.id', '=', 'perjalanans.id_user')
        ->select('users.email', 'perjalanans.tanggal', 'perjalanans.id', 'perjalanans.lokasi', 'perjalanans.suhu', 'perjalanans.jam')
        ->where('users.id', '=', auth()->user()->id)
        ->get();
        return view('dataPerjalanan',['data'=>$data]);
    }

    public function halamanPerjalanan(){
        return view('formPerjalanan');
    }

    public function simpanPerjalanan(Request $request){
        $data=[
            'id_user'=>auth()->user()->id,
            'jam'=>$request->jam,
            'tanggal'=>$request->tanggal,
            'lokasi'=>$request->lokasi,
            'suhu'=>$request->suhu,
        ];

        perjalanan::create($data);

        return redirect('form-perjalanan');
    }

    public function DeletePerjalanan(Request $request){
        $delete = $request->delete;
        $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
        ->Where(function ($query) use($delete) {
                $query->where('users.id', auth()->user()->id)
                        ->where('perjalanans.id',$delete);
        })
        ->get(['perjalanans.*']);

        Perjalanan::destroy($data);
        // Alert::toast('Perjalanan Berhasil Di Delete!','success')->position('top-end');
        return back();
        // dd($data);
    }
}
