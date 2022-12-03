<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratMasuk;
use App\Undangan;
use App\Disposisi;
use App\Divisi;
use Auth;

class DisposisiController extends Controller
{
    // public function index(){
    //     $data = Disposisi::all();
    // 	return view('disposisi.disposisi', compact('data'));
    // }

    public function createUndangan(){
        if(Auth::user()->divisi == 'Agendaris'){
            $surat2 = Undangan::all(['id','asal_surat']);
            $divisi = Divisi::all();
            return view('disposisi.tambah_disposisiUndangan', compact('divisi', 'surat2'));
        }else{
            return redirect()->back();
        }
    }

    public function createSmUmum(){
    	if (Auth::user()->divisi == 'Agendaris') {
            $surat = SuratMasuk::all(['id','asal_surat']);
            return view('disposisi.tambah_disposisiSmUmum', compact('surat', 'surat2'));
        }else{
            return redirect()->back();
        }
    }

    // public function store(Request $r){
    // 	Disposisi::create($r->all());
    // 	return redirect('disposisi');
    // }
}
