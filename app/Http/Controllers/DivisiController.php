<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use Illuminate\Support\Facades\Auth;

class DivisiController extends Controller
{
    public function index(){
    	if (Auth::user()->jenis_user == 'admin' or Auth::user()->jenis_user == 'agendaris') {
            $divisi = Divisi::paginate(10);
            return view('divisi.divisi', compact('divisi'));
        }
    }

    public function create(){
        if (Auth::user()->divisi == 'Administrator') {
            return view('divisi.buat_divisi');
        }else{
            return redirect()->back();
        }
    }

    public function store(Request $request){
    	if (Auth::user()->jenis_user == 'admin') {
            Divisi::create($request->all());
            return redirect()->route('divisi.create')->with(['success' => 'Divisi berhasil ditambahkan!']);
        }
    }

    public function edit($id){
    	if (Auth::user()->divisi == 'Administrator') {
            $divisi = Divisi::find($id);
            return view('divisi.ubah_divisi', compact('divisi'));
        }
    }

    public function update(Request $update, $id){
    	if (Auth::user()->divisi == 'Administrator') {
            Divisi::find($id)->update($update->all());
            return redirect('divisi');
        }
    }

    public function destroy($id){
    	if (Auth::user()->jenis_user == 'admin') {
            Divisi::find($id)->delete();
            return redirect('divisi');
        }
    }

    public function show($id){
        if (Auth::user()->divisi == 'Administrator') {
            $f = Divisi::find($id);
            $f = $f->toArray();
            $a = strtotime($f['created_at']);
            $f['created_at'] = date('Y-m-d', $a);
            return json_encode($f);
        }else{
            return redirect()->back();
        }
    }
}
