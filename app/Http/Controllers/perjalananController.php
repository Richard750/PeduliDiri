<?php

namespace App\Http\Controllers;

use App\Models\perjalanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class perjalananController extends Controller
{
    
    public function index(){
        // $data = perjalanan::all();
        // return view('dataPerjalanan', compact('perjalanan'));

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

        return redirect('data-perjalanan');
    }

    Public function editPerjalanan(Request $request) {
        $selected = Perjalanan::find(((int) $request->id));
        return view('editPerjalanan', ['data' => $selected ]);
    }

    // public function updatePerjalanan(Request $request){
    //     $data=[
    //         'tanggal'=>$request->tanggal,
    //         'jam'=>$request->jam,
    //         'lokasi'=>$request->lokasi,
    //         'suhu'=>$request->suhu,
    //         'id_user'=>auth()->user()->id,
    //     ];

    //     DB::table('perjalanans')
    //           ->where('id', $request->edit)
    //           ->update($data);
    //     return back();
    // }

    public function updatePerjalanan(Request $request)
    {
        $perjalanan = perjalanan::find(((int) $request->id));
        $perjalanan->jam = $request->jam;
        $perjalanan->tanggal = $request->tanggal;
        $perjalanan->lokasi = $request->lokasi;
        $perjalanan->suhu = $request->suhu;
        $perjalanan->update();

        return redirect('/data-perjalanan');
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
        return back();
    }
}
