<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();
        $karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('index',['karyawan' => $karyawan]);
    }

// method untuk menampilkan view form tambah pegawai
    public function tambahkaryawan(){
        // memanggil view tambah
        return view('tambahkaryawan');
    }

    // method untuk insert data ke table pegawai
public function storekaryawan(Request $request)
{
	// insert data ke table pegawai
	DB::table('karyawan')->insert([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');

}

// method untuk edit data pegawai
// public function editkaryawan($id)
// {
// 	// mengambil data pegawai berdasarkan id yang dipilih
// 	$sepeda = DB::table('sepeda')->where('id',$id)->get();
// 	// passing data pegawai yang didapat ke view edit.blade.php
// 	return view('editsepeda',['sepeda' => $sepeda]);

// }

// // update data pegawai
// public function updatesepeda(Request $request)
// {
// 	// update data pegawai
// 	DB::table('sepeda')->where('id',$request->id)->update([
// 		'merk' => $request->merk,
// 		'harga' => $request->harga,
// 		'tersedia' => $request->tersedia,
// 		'berat_kg' => $request->berat_kg
// 	]);
// 	// alihkan halaman ke halaman pegawai
// 	return redirect('/sepeda');
// }

// method untuk hapus data pegawai
public function hapuskaryawan($kodepegawai)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
}

// 	public function carisepeda(Request $request)
// 	{
// 		// menangkap data pencarian
// 		$cari = $request->cari;

//     		// mengambil data dari table pegawai sesuai pencarian data
// 		$sepeda = DB::table('sepeda')
// 		->where('merk','like',"%".$cari."%")
// 		->paginate();

//     		// mengirim data pegawai ke view index
// 		return view('indexsepeda',['sepeda' => $sepeda]);

// 	}

}
