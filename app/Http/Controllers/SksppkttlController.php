<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filesk;
use App\Sksppkttl;
use App\Divisi;
use Auth;
use Session;

class SksppkttlController extends Controller
{
    public function index(){
    	$sksppkttl = Sksppkttl::orderBy('id', 'desc')->get();
    	return view('sksppkttl.sksppkttl', compact('sksppkttl'));
    }

    public function create(){
    	$file = Filesk::doesntHave('hasOneSksppkttl')->doesntHave('hasOneSkbws')->doesntHave('hasOneSkppd')->doesntHave('hasOneSksppdttl')->doesntHave('hasOneSksatker')->get();
    	return view('sksppkttl.buat_sksppkttl', compact('file'));
    }

    public function store(Request $sksppktll){
    	$surat = $sksppktll->all();
    	$surat['no_surat'] = $surat['no_surat'].$surat['tambahan'];
    	Sksppkttl::create($surat);
        Session::put('plus', 'Tambah data surat sppdttl berhasil!');
    	return redirect('sksppkttl');
    }

    public function edit($id){
        $divisi = Divisi::all();
        $file = Filesk::all();
        $surat = Sksppkttl::find($id);
        return view('sksppkttl.ubah_sksppkttl', compact('surat', 'divisi','file'));
    }

    public function update(Request $req, $id){
        $r = $req->all();
        Sksppkttl::find($id)->update($r);
        Session::put('ubah', 'Ubah data surat ppkttl berhasil!');
        return redirect('sksppkttl');
    }

    public function destroy($id){
    	Sksppkttl::find($id)->delete();
        Session::put('success', 'Hapus data surat sppd berhasil!');
    	return redirect('sksppkttl');
    }
}
