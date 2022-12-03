<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memanggil Model
use App\Distribusi;
use File;
use App\Divisi;
use App\Undangan;
use App\SuratMasuk;
use Auth;

class DistribusiController extends Controller
{
	
	public function getNotifDist(){
		$data = Distribusi::where('tujuan', '=', Auth::user()->divisi_id)->where('smund_id', '=', NULL)->where('status_baca','unread')->limit(5)->orderBy('id', 'asc')->get();
		return $data;
	}

	public function getNotifDistUnd(){
		$data = Distribusi::where('tujuan', '=', Auth::user()->divisi_id)->where('smumum_id', '=', NULL)->where('status_baca','unread')->limit(5)->orderBy('id', 'asc')->get();
		return $data;
	}

	public function index(){
		if (Auth::user()->divisi == 'Agendaris') {
			$data = Distribusi::where('smumum_id', '!=', NULL)->orderBy('id', 'desc')->get();
			return view('distribusi.distribusiUmum')->with('data', $data);
		}else{
			$data =  Auth::user()->belongsToDivisi->hasManyDistribusi->where('smumum_id', '!=', NULL); // select from user, divisi, distribusi where kondisi
			return view('distribusi.distribusiUmum')->with('data', $data);
		}
	}

	public function undangan(){
		if (Auth::user()->divisi == 'Agendaris') {
			$undangan = Distribusi::where('smund_id', '!=', NULL)->orderBy('id', 'desc')->get();
			// print_r($undangan);
			return view('distribusi.distribusiUndangan')->with('undangan', $undangan);
		}else{
			$undangan =  Auth::user()->belongsToDivisi->hasManyDistribusi->where('smund_id', '!=', NULL); // select from user, divisi, distribusi where kondisi
			return view('distribusi.distribusiUndangan')->with('undangan', $undangan);
		}
	}

	public function store(Request $a){
		$r = $a->all();
		// var_dump($r);
		for($i = 0; $i < sizeof($r['tujuan']); $i++){
			Distribusi::create([
				'smumum_id' => $r['smumum_id'],
				'tujuan' => $r['tujuan'][$i]
				]);
		}
		return redirect('distribusi');
	}

	public function storeUndangan(Request $a){
		$r = $a->all();
		// var_dump($r);
		for($i = 0; $i < sizeof($r['tujuan']); $i++){
			Distribusi::create([
				'smund_id' => $r['smund_id'],
				'tujuan' => $r['tujuan'][$i]
				]);
		}
		return redirect('distribusiUndangan');
	}

	public function create(){
		$divisi = Divisi::all();
		$surat = SuratMasuk::doesntHave('hasManyDistribusi')->get();
		return view('distribusi.tambah_distribusi', compact('divisi', 'surat'));
	}

	public function createUndangan(){
		$divisi = Divisi::all();
		$undangan = Undangan::doesntHave('hasManyDistribusi')->get();
		return view('distribusi.tambah_distribusiUndangan', compact('divisi', 'undangan'));
	}

	public function show($id){
		$data = Distribusi::find($id); // select * from .. where id = $id
		return view('distribusi.edit_distribusi')->with('data', $data);
	}

	public function edit($id){
		$divisi = Divisi::all();
		$data = Distribusi::find($id); // select * from ... where id = $id
		return view('distribusi.edit_distribusi', compact('data', 'divisi'));
	}

	public function editUndangan($id){
		$divisi = Divisi::all();
		$data = Distribusi::find($id); // select * from ... where id = $id
		return view('distribusi.edit_distribusiUndangan', compact('data', 'divisi'));
	}

	public function update(Request $request, $id){
		$a = $request->all();
		Distribusi::find($id)->update($a); // update set ... = ... where id = $id
		// $file1 = $request->file('file_disposisi');
		// if ($file1 != null) {
		// 	if ($data->file_disposisi != ''){
		// 		File::delete(public_path($data->file_disposisi));
		// 	}
		// 	$fileName = $file1->getClientOriginalName();
		// 	$file1->move('upload/file_disposisi', $fileName);
		// 	$a['file_disposisi'] = 'upload/file_disposisi/'.$fileName;
		// }
		// $file2 = $request->file('file_surat');
		// if ($file2 != null) {
		// 	if ($data->file_surat != ''){
		// 		File::delete(public_path($data->file_surat));
		// 	}
		// 	$fileName = $file2->getClientOriginalName();
		// 	$file2->move('upload/file_surat', $fileName);
		// 	$a['file_surat'] = 'upload/file_surat/'.$fileName;
		// }
		// $data->update($a);
		return redirect('distribusi');
	}

	public function updateUndangan(Request $req, $id){
		$r = $req->all();
		Distribusi::find($id)->update($r);
		return redirect('distribusiUndangan');
	}

	public function switchStatus($id){
		if (Auth::user()->divisi == 'KETUA BWS NT I') {
			return redirect()->back();
		}else{
			$a = Distribusi::find($id);
			if ($a['status_baca'] == 'unread') {
				$a['status_baca'] = 'read';
				$a->save();
				return redirect()->back();
			}
		}
	}

	public function destroy($id){
		$data = Distribusi::find($id);
		File::delete(public_path($data->file_disposisi));
		File::delete(public_path($data->file_surat));
		$data->delete();
		return redirect()->back();
	}

}
