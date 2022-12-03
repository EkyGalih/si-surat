<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Undangan;
use App\SuratMasuk;
use App\Skbws;
use App\Sksatker;
use App\Sksppd;
use App\Sksppdttl;
use App\Sksppkttl;
use Auth;
use Session;

class PDFController extends Controller
{

    public function undangan(){
        if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
            return view('laporan.cetakLaporanUndangan');
        }else{
            return redirect()->back();
        }
    }

    public function SuratMasuk(){
        if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
            return view('laporan.cetakLaporanSuratMasuk');
        }else{
            return redirect()->back();
        }
    }

    public function Skbws(){
        if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
            return view('laporan.cetakLaporanSkbws');
        }else{
            return redirect()->back();
        }
    }

    public function Sksatker(){
        if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
            return view('laporan.cetakLaporanSksatker');
        }else{
            return redirect()->back();
        }
    }

    public function Sksppd(){
        if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
            return view('laporan.cetakLaporanSksppd');
        }else{
            return redirect()->back();
        }
    }

    public function Sksppdttl(){
        if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
            return view('laporan.cetakLaporanSksppdttl');
        }else{
            return redirect()->back();
        }
    }

    public function Sksppkttl(){
        if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
            return view('laporan.cetakLaporanSksppkttl');
        }else{
            return redirect()->back();
        }
    }

    public function getPDFUndangan(Request $r){
    	if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
            $undangan = Undangan::where('kd_klasifikasi', '=', $r->input('kd_klasifikasi'))->orderBy('no_surat', 'asc')->get();
            if (sizeof($undangan) > 0) {
                $pdf = PDF::loadView('laporan.LaporanUndangan', ['undangan' => $undangan])->setPaper('a4', 'landscape');
                return $pdf->stream('Laporan Surat Masuk Undangan (BWS NT I).pdf');
            }else{
                Session::put('fail', 'Data dengan Kode '.$r->input('kd_klasifikasi').' tidak tersedia');
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }

    public function getPDFSuratMasuk(Request $r){
    	if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
            $suratmasuk = SuratMasuk::where('kd_klasifikasi', '=', $r->input('kd_klasifikasi'))->orderBy('no_surat', 'asc')->get();
            if (sizeof($suratmasuk) > 0) {
                $pdf = PDF::loadView('laporan.LaporanSuratMasuk', ['suratmasuk' => $suratmasuk])->setPaper('a4', 'landscape');
                return $pdf->download('Laporan Surat Masuk Umum (BWS NT I).pdf');
            }else{
                Session::put('fail', 'Data dengan Kode '.$r->input('kd_klasifikasi').' tidak tersedia');
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }

    public function getPDFSkBws(Request $r){
    	if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
            $skbws = Skbws::where('kd_klasifikasi', '=', $r->input('kd_klasifikasi'))->orderBy('no_surat', 'asc')->get();
            if (sizeof($skbws) > 0) {
                $pdf = PDF::loadView('laporan.LaporanSkbws', ['skbws' => $skbws])->setPaper('a4', 'landscape');
                return $pdf->download('Laporan Surat Keluar (BWS NT I).pdf');
            }else{
                Session::put('fail', 'Data dengan Kode '.$r->input('kd_klasifikasi').' tidak tersedia');
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }

    public function getPDFSksatker(Request $r){
    	if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
            $sksatker = Sksatker::where('kd_klasifikasi', '=', $r->input('kd_klasifikasi'))->orderBy('no_surat', 'asc')->get();
            if (sizeof($sksatker) > 0) {
                $pdf = PDF::loadView('laporan.laporanSksatker', ['sksatker' => $sksatker])->setPaper('a4', 'landscape');
                return $pdf->download('Laporan Surat Keluar Satuan Kerja (BWS NT I).pdf');
            }else{
             Session::put('fail', 'Data dengan Kode '.$r->input('kd_klasifikasi').' tidak tersedia');
             return redirect()->back();
         }
     }else{
        return redirect()->back();
    }
}

public function getPDFSksppd(Request $r){
    if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
        $skppd = Sksppd::where('kd_klasifikasi', '=', $r->input('kd_klasifikasi'))->orderBy('no_surat', 'asc')->get();
        if (sizeof($skppd) > 0) {
            $pdf = PDF::loadView('laporan.laporanSkppd', ['skppd' => $skppd])->setPaper('a4', 'landscape');
            return $pdf->download('Laporan Surat Keluar SPPD (BWS NT I).pdf');
        }else{
            Session::put('fail', 'Data dengan Kode '.$r->input('kd_klasifikasi').' tidak tersedia');
            return redirect()->back();
        }
    }else{
        return redirect()->back();
    }
}

public function getPDFSksppdttl(Request $r){
    if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
        $skppdttl = Sksppdttl::where('kd_klasifikasi', '=', $r->input('kd_klasifikasi'))->orderBy('no_surat', 'asc')->get();
        if (sizeof($skppdttl) > 0) {
            $pdf = PDF::loadView('laporan.laporanSkppdttl', ['skppdttl' => $skppdttl])->setPaper('a4', 'landscape');
            return $pdf->download('Laporan Surat Keluar SPPD Tata Laksana (BWS NT I).pdf');
        }else{
            Session::put('fail', 'Data dengan Kode '.$r->input('kd_klasifikasi').' tidak tersedia');
            return redirect()->back();
        }
    }else{
        return redirect()->back();
    }
}

public function getPDFSksppkttl(Request $r){
    if (Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip BWS NT I') {
        $skppkttl = Sksppkttl::where('kd_klasifikasi', '=', $r->input('kd_klasifikasi'))->orderBy('no_surat', 'asc')->get();
        if (sizeof($skppkttl) > 0) {
            $pdf = PDF::loadView('laporan.laporanSkppkttl', ['skppkttl' => $skppkttl])->setPaper('a4', 'landscape');
            return $pdf->download('Laporan Surat Keluar SPPK Tata laksana (BWS NT I).pdf');
        }else{
            Session::put('fail', 'Data dengan Kode '.$r->input('kd_klasifikasi').' tidak tersedia');
            return redirect()->back();
        }
    }else{
        return redirect()->back();
    }
}
}
