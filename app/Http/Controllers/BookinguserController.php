<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookinguserController extends Controller
{
    public function index(Request $request){

        echo'test';
    }
    public function store(Request $request)
{
    // var_dump($request);die;
	// insert data ke table pegawai
	DB::table('booking')->insert([
		'id_pelanggan' => 1,
		'id_villa' => $request->id_villa,
        'tgl_checkin'=>$request->tgl_checkin,
        'estimasi_checkin'=>$request->estimasi_checkin,
        'tgl_checkout'=>$request->tgl_checkout,
        'estimasi_checkout'=>$request->estimasi_checkout,
        'jumlah_orang'=>$request->jumlah_orang,
        'total_pembayaran'=>$request->total_pembayaran,
        'jumlah_dp'=>$request->jumlah_dp,
        'tgl_dp'=>$request->tgl_dp,
        'bukti_dp'=>$request->bukti_dp,
        'additional'=>$request->additional,
	]);
	// alihkan halaman ke halaman booking

    return redirect()->route('booking')->with('message', 'booking berhasil dibuat');

}
}
