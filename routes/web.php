<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SepedaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\NilaiController;
//import java.io;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//System.out.println("hello world");
Route::get('/', function () {
    return view('welcome');
});


Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('satu', function () {
	return view('pertama');
});

Route::get('layout', function () {
	return view('tugaslayout');
});

Route::get('tugascss', function () {
	return view('tugascss');
});

Route::get('template1', function () {
	return view('template1');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('contactform', function () {
	return view('contactform');
});

Route::get('validasi1', function () {
	return view('validasi1');
});

Route::get('ets', function () {
	return view('index1');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('welcome', [DosenController::class, 'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'indexpegawai']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route sepeda
Route::get('/sepeda', [SepedaController::class, 'indexsepeda']);
Route::get('/sepeda/tambah', [SepedaController::class, 'tambahsepeda']);
Route::post('/sepeda/store', [SepedaController::class, 'storesepeda']); //jika form dikirim, route ini akan dijalankan
Route::get('/sepeda/edit/{id}',[SepedaController::class, 'editsepeda']);
Route::post('/sepeda/update',[SepedaController::class, 'updatesepeda']);
Route::get('/sepeda/hapus/{id}', [SepedaController::class, 'hapussepeda']);

Route::get('/sepeda/cari', [SepedaController::class, 'carisepeda']);

//route karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambahkaryawan']);
Route::post('/karyawan/store', [KaryawanController::class, 'storekaryawan']); //jika form dikirim, route ini akan dijalankan
Route::get('/karyawan/hapus/{kodepegawai}', [KaryawanController::class, 'hapuskaryawan']);

//router pagecounter
Route::get('/pagecounter', [PageCounterController::class, 'pageindex']);

//route Nilai
Route::get('/eas', [NilaiController::class, 'indexnilai']);
Route::get('/eas/tambah', [NilaiController::class, 'tambahnilai']);
Route::post('/eas/store', [NilaiController::class, 'storenilai']);
