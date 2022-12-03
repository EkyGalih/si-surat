<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sksppdttl;
use App\Filesk;
use App\Divisi;
use Session;

class SksppdttlController extends Controller
{
    public function index(){
    	$sksppdttl = Sksppdttl::orderBy('id', 'desc')->get();;
    	return view('sksppdttl.sksppdttl', compact('sksppdttl'));
    }

    public function create(){
    	$file = Filesk::doesntHave('hasOneSksatker')->doesntHave('hasOneSkbws')->doesntHave('hasOneSkppd')->doesntHave('hasOneSksppkttl')->doesntHave('hasOneSksppdttl')->get();
    	return view('sksppdttl.buat_sksppdttl', compact('file'));
    }

    public function store(Request $sksppdttl){
    	$surat = $sksppdttl->all();
    	$surat['no_surat'] = $surat['no_surat'].$surat['tambahan'];
    	Sksppdttl::create($surat);
        Session::put('plus', 'Tambah data surat sppdttl berhasil!');
    	return redirect('sksppdttl');
    }

    public function edit($id){
        $divisi = Divisi::all();
        $file = Filesk::all();
        $surat = Sksppdttl::find($id);
        return view('sksppdttl.ubah_sksppdttl', compact('surat', 'divisi','file'));
    }

    public function update(Request $req, $id){
        $r = $req->all();
        Sksppdttl::find($id)->update($r);
        Session::put('ubah', 'Ubah data surat sppdttl berhasil!');
        return redirect('sksppdttl');
    }

    public function destroy($id){
    	Sksppdttl::find($id)->delete();
        Session::put('success', 'Hapus data surat sppd berhasil!');
    	return redirect('sksppdttl');
    }
}
