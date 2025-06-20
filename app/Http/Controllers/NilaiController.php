<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function indexnilai()
    {
    	// mengambil data dari table pegawai
    	$nilai = DB::table('nilai')->get();
        //$nilai = DB::table('nilai')->paginate(10);

    	// mengirim data nilai ke view indexnilai
    	return view('indexnilai',['nilai' => $nilai]);
    }

// method untuk menampilkan view form tambah nilai
    public function tambahnilai(){
        // memanggil view tambah
        return view('tambahnilai');
    }

    // method untuk insert data ke table nilai
public function storenilai(Request $request)
{
	// insert data ke table nilai
	DB::table('nilai')->insert([
		'nomorinduksiswa' => $request->nomorinduksiswa,
		'nilaiangka' => $request->nilaiangka,
		'sks' => $request->sks,
	]);
	// alihkan halaman ke halaman nilai
	return redirect('/nilai');

}

}
