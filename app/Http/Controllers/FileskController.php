<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filesk;
use File;
use Auth;

class FileskController extends Controller
{
	public function getNotifFilesk(){
		$data = Filesk::where('status','proggress')->limit(5)->orderBy('id', 'asc')->get();
		return $data;
	}

	public function getNotifFileskClient(){
		$data = Filesk::where('status','unread')->where('staff_bagian', '=', Auth::user()->divisi)->limit(5)->orderBy('id', 'asc')->get();
		return $data;
	}
	
	public function index(){
		if (Auth::user()->divisi == 'Ketua BWS NT I') {
			return redirect()->back();
		}elseif(Auth::user()->divisi == 'Agendaris'){
			$file = Filesk::orderBy('id', 'desc')->get();
			return view('filesk.filesk', compact('file'));
		}else{
			$file = Filesk::where('staff_bagian', '=', Auth::user()->divisi)->orderBy('id', 'desc')->get();
			return view('filesk.filesk', compact('file'));
		}
	}

	public function create(){
		if (Auth::user()->divisi == 'Ketua BWS NT I' && Auth::user()->divisi == 'Agendaris') {
			return redirect()->back();
		}else{
			return view('filesk.buat_filesk');
		}
	}

	public function store(Request $filesk){
		if (Auth::user()->divisi == 'Ketua BWS NT I') {
			return redirect()->back();
		}else{
			$f = $filesk->all();
			$file = $filesk->file('file');
			if ($file != null) {
				$filename = $file->getClientOriginalName();
				$file->move('upload/file_surat',$filename);
				$f['file'] = 'upload/file_surat/'.$filename;     
			}else{
				$f['file'] = '';
			}
			Filesk::create($f);
			return redirect('filesk');
		}
	}

	public function edit($id){
		if (Auth::user()->divisi == 'KETUA BWS NT I') {
			return redirect()->back();
		}else{
			$file = Filesk::find($id);
			return view('filesk.ubah_filesk', compact('file'));
		}
	}

	public function uploadNoSurat($id){
		if (Auth::user()->divisi == 'KETUA BWS NT I') {
			return redirect()->back();
		}else{
			$file = Filesk::find($id);
			return view('filesk.uploadNoSurat', compact('file'));
		}
	}

	public function update(Request $filesk, $id){
		if (Auth::user()->divisi == 'Ketua BWS NT I') {
			return redirect()->back();
		}else{
			$f = $filesk->all();
			$file = $filesk->file('file');
			$sblm = Filesk::find($id);
			if ($file != null) {
				File::delete(public_path($sblm->file));
				$filename = $file->getClientOriginalName();
				$file->move('upload/file_surat',$filename);
				$f['file'] = 'upload/file_surat/'.$filename;
			}
			Filesk::find($id)->update($f);
			return redirect('filesk');
		}
	}

	public function switchStatus($id){
		if (Auth::user()->divisi == 'Ketua BWS NT I') {
			return redirect()->back();
		}else{
			$a = Filesk::find($id);
			if ($a['status'] == 'proggress') {
				$a['status'] = 'unread';
				$a->save();
				return redirect('filesk');
			}elseif($a['status'] == 'unread'){
				$a['status'] = 'read';
				$a->save();
				return redirect('filesk');
			}
			// $a->status = !$a->status;
			// $a->save();
		}
	}

	public function destroy($id){
		if (Auth::user()->divisi == 'Ketua BWS NT I') {
			return redirect()->back();
		}else{
			$f = Filesk::find($id);
			File::delete(public_path($f->file));
			$f->delete();
			return redirect('filesk');
		}
	}

	public function show($id){
		if (Auth::user()->divisi == 'Ketua BWS NT I') {
			return redirect()->back();
		}else{
			$f = Filesk::find($id);
			$f = $f->toArray();
			$a = strtotime($f['created_at']);
			$f['created_at'] = date('Y-m-d', $a);
			return json_encode($f);
		}
	}
}
