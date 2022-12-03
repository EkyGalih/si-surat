<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
    	if (Auth::user()->divisi == 'Administrator') {
            $user = User::all();
            return view('auth.users', compact('user'));
        }else{
            return redirect()->back();
        }
    }

    public function create(){
    	$divisi = Divisi::all();
    	return view('auth.register', compact('divisi'));
    }

    public function store(Request $request){
    	$r = $request->all();
    	$r['password'] = bcrypt($r['password']);
    	User::create($r);
    	return redirect('user');
    	// var_dump($r);
    }

    public function edit($id){
    	$user = User::find($id);
        $divisi = Divisi::all();
        return view('auth.ubah_user', compact('user', 'divisi'));
    }

    public function update(Request $user, $id){
    	User::find($id)->update($user->all());
    	if (Auth::user()->divisi == 'Administrator') {
            return redirect('user');
        }else{
            Session::put('success', 'Ubah profil berhasil!');
            return redirect()->back();
        }
    }

    public function resetPass($id){
    	$pass = User::find($id);
    	return view('auth.reset_pass', compact('pass'));
    }

    public function changePass(Request $pass, $id){
    	$p = $pass->all();
    	$p['password'] = bcrypt($p['password']);
    	User::find($id)->update($p);
    	return redirect('user');
    	// var_dump($p);
    }

    public function ChangePhoto(Request $foto, $id){
        $f = $foto->all();
        $file = $foto->file('foto');
        $sblm = User::find($id);
        if ($file != NULL) {
            File::delete(public_path($sblm->foto));
            $filename = $file->getClientOriginalName();
            $file->move('upload/profile',$filename);
            $f['foto'] = 'upload/profile/'.$filename;  
        }else{
            $f['foto'] = '';
        }
        User::find($id)->update($f);
        Session::put('success', 'Upload foto profil berhasil.');
        return redirect('user');
    }

    public function profile(){
     $data = Auth::user()->belongsToDivisi->hasManyDistribusi->where('smund_id', '!=', NULL);
     $umum = Auth::user()->belongsToDivisi->hasManyDistribusi->where('smumum_id', '!=', NULL);
     return view('auth.profile', compact('data', 'umum'));
     // var_dump($data);
 }

 public function destroy($id){
    User::find($id)->delete();
    return redirect('user');
}
}
