<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sms;
use DB;

class SmsController extends Controller
{
    public function index(){
    	$data = Sms::all();
    	return view('sms.sms', compact('data'));
    }

    public function create(){
    	return view('sms.buat_Sms');
    }

    public function store(Request $request){
    	$r = $request->all();
    	// return redirect('sms');
        $nomor = $r['DestinationNumber'];
        $text = $r['TextDecoded'];
        $pengirim = $r['CreatorID'];
        DB::connection('gammu')->insert('insert into outbox (DestinationNumber, TextDecoded, CreatorID) values (?, ?, ?)', [$nomor, $text, $pengirim]);
        return redirect()->back();
    }

    public function destroy($id){
        Sms::find($id)->delete();
        return redirect('sms');
    }
}
