<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// memanggil model
use App\Undangan;
use App\Divisi;
use File;
use Auth;
use Session;

class UndanganController extends Controller
{

  public function getNotifSmund(){
    $data = Undangan::where('status_smund','proggress')->limit(5)->orderBy('id', 'asc')->get();
    return $data;
  }

  public function getNotifSmundAgendaris(){
    $data = Undangan::where('status_smund','unread')->limit(5)->orderBy('id', 'asc')->get();
    return $data;
  }

	// fungsi menampilkan halaman index (utama) pada folder resource/view/nama_view dengan mengirimkan isi value dari pada $data
  public function index(){
   		$data = Undangan::orderBy('id', 'desc')->get(); // select * from ..
      foreach ($data as $d) {
        $d['diteruskan'] = json_decode($d['diteruskan']);
      }
      return view('suratUndangan.undangan')->with('data', $data);
    }

   // fungsi menampilkan halaman buat data (insert data)
    public function create(){
      return view('suratUndangan.buat_suratUndangan');
    }

   // fungsi untuk menampung inputan dari user dan memasukkannya ke dalam database
   // membutuhkan dua parameter yaitu Request (isi dari inputan user) dan $request (variabel penampung dari Request)
    public function store(Request $request){
      $r = $request->all();
      $gambar = $request->file('gambar');
      if ($gambar != null) {
         $gambarname = $gambar->getClientOriginalName(); //mengambil nama asli dari file yang diupload
         $gambar->move('upload/file_suratundangan',$gambarname); //mengirimkan file ke folder upload
         $r['gambar'] = 'upload/file_suratundangan/'.$gambarname; //mengirimkan file(hanya nama file) ke database
       }else{
         $r['gambar'] = '';
       }
       Undangan::create($r);
       return redirect('suratUndangan');
     }

   // fungsi untuk mengirimkan data spesifik (edit data) ke dalam halaman edit
   // membutuhkan parameter $id
     public function edit($id){ 
      $divisi = Divisi::all();
   		$data = Undangan::find($id); // select * from .. where id = $id
   		return view('suratUndangan.ubah_suratUndangan', compact('divisi', 'data')); // menampilkan halaman ubah_suratUndangan dan mengirimkan isi dari variabel $data ke halaman ubah_suratUndangan
    }

     public function ubahUndangan($id){ 
      $data = Undangan::find($id); // select * from .. where id = $id
      return view('suratUndangan.ubahUndangan', compact('data')); // menampilkan halaman ubah_suratUndangan dan mengirimkan isi dari variabel $data ke halaman ubah_suratUndangan
    }

   // fungsi untuk mengubah data di database dengan data yang di inputkan user
   // membutuhkan 3 parameter yaitu Request (isi inputan user), $request (yang menampung isi dari Request) dan $id (parameter yang menentukan data mana yang akan di ubah)
    public function update(Request $request, $id){
      $r = $request->all();
      $r['diteruskan'] = json_encode($r['diteruskan']);
      // var_dump($r);
      // echo $r['diteruskan'];
      $data = Undangan::find($id)->update($r); // Select * from .. where id = $id && Update set .. = .. where id = $id
      // $data = $data->toString();
      return redirect('suratUndangan'); // redirect halaman
    }

    public function updateUndangan(Request $req, $id){
      $r = $req->all();
      Undangan::find($id)->update($r);
   		return redirect('suratUndangan'); // redirect halaman
    }

    public function switchStatus($id){
      if (Auth::user()->divisi == 'Ketua BWS NT I') {
        return redirect()->back();
      }else{
        $a = Undangan::find($id);
        if ($a['status_smund'] == 'unread') {
          $a['status_smund'] = 'read';
          $a->save();
          return redirect('suratUndangan');
        }
      }
    }

   // fungsi untuk menghapus query di database
   // membutuhkan parameter $id untuk menentukan query yang akan di hapus
    public function destroy($id){
     $u = Undangan::find($id);
     File::delete(public_path($u->gambar));
     $u->delete();
     Session::put('success', 'Hapus data surat masuk undangan berhasil!');
   		return redirect('suratUndangan'); // redirect ke halaman utama
    }

    public function show($id){
      $f = Undangan::find($id);
      $f = $f->toArray();
      $a = strtotime($f['created_at']);
      $f['created_at'] = date('Y-m-d', $a);
      return json_encode($f);
    }
  }
