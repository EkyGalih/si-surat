<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sksatker;
use App\Filesk;
use App\Divisi;
use Auth;
use Session;

class SksatkerController extends Controller
{
    public function index(){
    	if (Auth::user()->divisi == 'Agendaris') {
            $sksatker = Sksatker::orderBy('id', 'desc')->get();;
            return view('sksatker.sksatker', compact('sksatker'));
        }else{
            return redirect()->back();
        }
    }

    public function create(){
        if (Auth::user()->divisi == 'Agendaris') {
         $file = Filesk::doesntHave('hasOneSksatker')->doesntHave('hasOneSkbws')->doesntHave('hasOneSkppd')->doesntHave('hasOneSksppdttl')->doesntHave('hasOneSksppkttl')->get();
         return view('sksatker.buat_sksatker', compact('file'));
     }else{
        return redirect()->back();
    }
}

public function store(Request $sksatker){
    if (Auth::user()->divisi == 'Agendaris') {
    	$surat = $sksatker->all();
    	$surat['no_surat'] = $surat['no_surat'].$surat['tambahan'];
    	Sksatker::create($surat);
        Session::put('plus', 'Tambah data surat satker berhasil!');
    	return redirect('sksatker');
    }else{
        return redirect()->back();
    }
}

public function edit($id){
    $divisi = Divisi::all();
    $file = Filesk::all();
    $surat = Sksatker::find($id);
    return view('sksatker.ubah_sksatker', compact('surat', 'divisi','file'));
}

 public function update(Request $req, $id){
        $r = $req->all();
        Sksatker::find($id)->update($r);
        Session::put('ubah', 'Ubah data surat satker berhasil!');
        return redirect('sksatker');
    }

public function destroy($id){
    if (Auth::user()->divisi == 'Agendaris') {
    	Sksatker::find($id)->delete();
    	return redirect('sksatker');
        Session::put('success', 'Hapus data surat satker berhasil!');
    }else{
        return redirect()->back();
    }
}
}
