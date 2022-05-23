<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route Bawaan Laravel
Route::get('/', function () {
    return view('welcome');
});

//PRAK 6
// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Route::resource('/dosen', DosenController::class);

// controller manual
Route::get('/', [PageController::class, 'index']);
Route::get('/home', [PageController::class, 'tampil']);
Route::get('/profile', [PageController::class, 'tampil']);
Route::get('/product', [PageController::class, 'tampil']);
Route::get('/contact', [PageController::class, 'tampil']);

//Route Facades
// Route::get('/facades', [PageController::class, 'cobaFacades']);

// external class
// Route::get('coba-class', [PageController::class, 'cobaClass']);

// route Tugas
// Route::get('data-mahasiswa', [MahasiswaController::class, 'mahasiswa']);
// Route::get('data-dosen', [MahasiswaController::class, 'dosen']);
// Route::get('data-gallery', [MahasiswaController::class, 'gallery']);

// Route::get('informasi/{jurusan}/{prodi}', [MahasiswaController::class, 'info']);

//PRAK 5
// Route::get('mahasiswa', function () {
//     $arrMahasiswa = ["Luhut Panjaitan","Jokowi","Vladimir Putin","Lisa Permata"];
//     return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
// });

// Route::get('dosen', function () {
//     $arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.","Dr. Umar Agustinus","Dr. Syahrial, M.Kom."];
//     return view('dosen')->with('dosen', $arrDosen);
// });

// Route::get('gallery', function () {
//     return view('gallery');
// });

// Route::get('admin', function () {
//     return view('admin');
// });

// //Menampilkan data
// Route::get('/mahasiswa', function () {
//     $nama = 'Deby Zamzam Firdaus';
//     $nilai = 75;
//     return view('mahasiswa',compact('nama','nilai'));
// });

// Route::get('/mahasiswa', function(){
//     $nama='<u>Deby Zamzam Firdaus</u>';
//     $nilai=75;
//     return view('mahasiswa',compact('nama','nilai'));
// });

// Route::get('/mahasiswa', function(){
//     $nama='Deby Zamzam Firdaus';
//     $nilai=75;
//     return view('mahasiswa',compact('nama','nilai'));
// });

// //perulangan foreach
// Route::get('/mahasiswa', function(){
//     $nama='Deby Zamzam Firdaus';
//     $nilai=[80,64,30,76,95];
//     return view('mahasiswa',compact('nama','nilai'));
// });

// //perintah continue dan break
// Route::get('/mahasiswa', function(){
//     $nama='Deby Zamzam Firdaus';
//     $nilai=[80,64,30,76,95];
//     return view('mahasiswa',compact('nama','nilai'));
// });
