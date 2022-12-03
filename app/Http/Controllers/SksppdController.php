<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisi;
use App\Sksppd;
use App\Filesk;
use Auth;
use Session;

class SksppdController extends Controller
{
    public function index(){
        if(Auth::user()->divisi == 'Agendaris'){
    	$sksppd = Sksppd::orderBy('id', 'desc')->get();;
    	return view('sksppd.sksppd', compact('sksppd'));
    }else{
        return redirect()->back();
    }
    }

    public function create(){
        if (Auth::user()->divisi == 'Agendaris'){
    	$divisi = Divisi::all();
    	$file = Filesk::doesntHave('hasOneSkppd')->doesntHave('hasOneSksatker')->doesntHave('hasOneSkbws')->doesntHave('hasOneSksppdttl')->doesntHave('hasOneSksppkttl')->get();
    	return view('sksppd.buat_sksppd', compact('divisi', 'file'));
    }else{
        return redirect()->back();
    }
    }

    public function store(Request $skppd){
        if(Auth::user()->divisi == 'Agendaris'){
    	$surat = $skppd->all();
    	$surat['no_surat'] = $surat['no_surat'].$surat['tambahan'];
    	Sksppd::create($surat);
        Session::put('plus', 'Tambah data surat sppd berhasil!');
    	return redirect('sksppd');
    }else{
        return redirect()->back();
    }
    }

     public function edit($id){
        $file = Filesk::all();
        $surat = Sksppd::find($id);
        return view('sksppd.ubah_sksppd', compact('surat','file'));
    }

    public function update(Request $req, $id){
        $r = $req->all();
        Sksppd::find($id)->update($r);
        Session::put('ubah', 'Ubah data surat sppd berhasil!');
        return redirect('sksppd');
    }

    public function destroy($id){
        if(Auth::user()->divisi == 'Agendaris'){
    	Sksppd::find($id)->delete();
        Session::put('success', 'Hapus data surat sppd berhasil!');
    	return redirect('sksppd');
    }else{
        return redirect()->back();
    }
    }
}
