<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//menggunakan model
use App\SuratMasuk;
use App\Divisi;
use File;
use Auth;
use Session;

class SuratMasukController extends Controller
{

  public function getNotifSmumum(){
    $data = SuratMasuk::where('status_smumum','proggress')->limit(5)->orderBy('id', 'asc')->get();
    return $data;
  }

  public function getNotifSmumumAgendaris(){
    $data = SuratMasuk::where('status_smumum','unread')->limit(5)->orderBy('id', 'asc')->get();
    return $data;
  }

    // fungsi menampilkan halaman index (utama) pada folder resource/view/nama_view dengan mengirimkan isi value dari pada $data
  public function index(){
   		$data = SuratMasuk::orderBy('id', 'desc')->get(); // select * from ..
      foreach ($data as $d) {
        $d['diteruskan'] = json_decode($d['diteruskan']);
      }
      return view('suratmasuk.SuratMasuk')->with('data', $data);
    }

   // fungsi menampilkan halaman buat data (insert data)
    public function create(){
      return view('suratmasuk.buat_SuratMasuk');
    }

   // fungsi untuk menampung inputan dari user dan memasukkannya ke dalam database
   // membutuhkan dua parameter yaitu Request (isi dari inputan user) dan $request (variabel penampung dari Request)
    public function store(Request $request){
      $r = $request->all();
      // $r['a'] = $r['a'].$r['b'];
      $gambar = $request->file('gambar');
      if ($gambar != null) {
         $gambarname = $gambar->getClientOriginalName(); //mengambil nama asli dari file yang diupload
         $gambar->move('upload/file_suratmasuk',$gambarname); //mengirimkan file ke folder upload
         $r['gambar'] = 'upload/file_suratmasuk/'.$gambarname; //mengirimkan data(hanya nama file) ke database     
       }else{
         $r['gambar'] = '';
       }
       SuratMasuk::create($r);
       return redirect('suratmasuk');
     }

   // fungsi untuk mengirimkan data spesifik (edit data) ke dalam halaman edit
   // membutuhkan parameter $id
     public function edit($id){
      $divisi = Divisi::all(); 
   		$data = SuratMasuk::find($id); // select * from .. where id = $id
   		return view('suratmasuk.ubah_SuratMasuk', compact('divisi','data')); // menampilkan halaman ubah_suratmasuk dan mengirimkan isi dari variabel $data ke halaman ubah_surat masuk
    }

    public function ubahSuratMasuk($id){
      $data = SuratMasuk::find($id);
      return view('suratmasuk.ubahSuratMasuk', compact('data'));
    }

   // fungsi untuk mengubah data di database dengan data yang di inputkan user
   // membutuhkan 3 parameter yaitu Request (isi inputan user), $request (yang menampung isi dari Request) dan $id (parameter yang menentukan data mana yang akan di ubah)
    public function update(Request $request, $id){
   		$r = $request->all(); // Select * from .. where id = $id && Update set .. = .. where id = $id
      $r['diteruskan'] = json_encode($r['diteruskan']);
      $data = SuratMasuk::find($id)->update($r);
   		return redirect('suratmasuk'); // redirect halaman
    }

    public function updateSuratMasuk(Request $req, $id){
      $r = $req->all();
      SuratMasuk::find($id)->update($r);
      return redirect('suratmasuk');
    }

    public function switchStatus($id){
      if (Auth::user()->divisi == 'Ketua BWS NT I') {
        return redirect()->back();
      }else{
        $a = SuratMasuk::find($id);
        if ($a['status_smumum'] == 'unread') {
          $a['status_smumum'] = 'read';
          $a->save();
          return redirect('suratmasuk');
        }
      }
    }

   // fungsi untuk menghapus query di database
   // membutuhkan parameter $id untuk menentukan query yang akan di hapus
    public function destroy($id){
   		$s = SuratMasuk::find($id); // Delete from .. where id = $id
      File::delete(public_path($s->gambar));
      $s->delete();
      Session::put('success', 'Hapus data surat masuk umum berhasil!');
   		return redirect('suratmasuk'); // redirect ke halaman utama
    }

    public function show($id){
      $f = SuratMasuk::find($id);
      $f = $f->toArray();
      $a = strtotime($f['created_at']);
      $f['created_at'] = date('Y-m-d', $a);
      return json_encode($f);
    }
  }
