<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisi;
use App\Skbws;
use App\Filesk;
use Auth;
use Session;

class SksbwsController extends Controller
{
    public function index(){
        if (Auth::user()->divisi = 'Agendaris') {
         // $skbws = Skbws::with('belongsToFilesk')->get();
         // menampilkan seluruh data filesk dengan skbws (join)
         $skbws = Skbws::orderBy('id', 'desc')->get();;
         return view('skbws.skbws', compact('skbws'));
     }else{
        return redirect()->back();
    }
}

public function create(){
    if (Auth::user()->divisi == 'Agendaris') {
       $divisi = Divisi::all();
       $file = Filesk::doesntHave('hasOneSkbws')->doesntHave('hasOneSksppkttl')->doesntHave('hasOneSkppd')->doesntHave('hasOneSksppdttl')->doesntHave('hasOneSksatker')->get(); //menampilkan query yang tidak punya relasi di filesk
       return view('skbws.buat_skbws', compact('divisi', 'file'));
   }else{
    return redirect()->back();
}
}

public function store(Request $sksbws){
    if (Auth::user()->divisi == 'Agendaris') {
        $surat = $sksbws->all();
        $surat['no_surat'] = $surat['no_surat'].$surat['tambahan'];
        Skbws::create($surat);
        Session::put('plus', 'Tambah data surat skbws berhasil!');
        return redirect('skbws');
    }else{
        return redirect()->back();
    }
}

    public function edit($id){
        $divisi = Divisi::all();
        $file = Filesk::all();
        $surat = Skbws::find($id);
        return view('skbws.ubah_skbws', compact('surat', 'divisi','file'));
    }

    public function update(Request $req, $id){
        $r = $req->all();
        Skbws::find($id)->update($r);
        Session::put('ubah', 'Ubah data surat skbws berhasil!');
        return redirect('skbws');
    }

    public function destroy($id){
        if(Auth::user()->divisi == 'Agendaris'){
        Skbws::find($id)->delete();
        Session::put('success', 'Hapus data surat skbws berhasil!');
        return redirect('skbws');
    }else{
        return redirect()->back();
    }
    }
}
