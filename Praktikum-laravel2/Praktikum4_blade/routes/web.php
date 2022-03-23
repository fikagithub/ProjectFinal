<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('welcome');
// });

//Blade Template Engine
// Route::get('/mahasiswa', function(){
//     $nama='Fika Adilah';
//     $nilai=75;
//     return view('mahasiswa',compact('nama','nilai'));
// });

// Route::get('/mahasiswa', function(){
//     $nama='<u>Fika Adilah</u>';
//     $nilai=75;
//     return view('mahasiswa',compact('nama','nilai'));
// });

//Kondisi If Else
// Route::get('/mahasiswa', function(){
//      $nama='Fika Adilah';
//      $nilai=105;
//      return view('mahasiswa',compact('nama','nilai'));
// });

//Kondisi Switch
// Route::get('/mahasiswa', function(){
//     $nama='Fika Adilah';
//     $nilai=95;
//     return view('mahasiswa',compact('nama','nilai'));
// });

// //Perulangan Foreach
// Route::get('/mahasiswa', function(){
//     $nama='Fika Adilah';
//     $nilai=[80,64,30,76,95];
//     return view('mahasiswa',compact('nama','nilai'));
// });

//Perulangan Forelse
// Route::get('/mahasiswa', function(){
//     $nama='Fika Adilah';
//     $nilai=[];
//     return view('mahasiswa',compact('nama','nilai'));
// });

//Perintah Continue dan Break
Route::get('/mahasiswa', function(){
    $nama = 'Fika Adilah';
    $nilai = [80,64,30,76,95];
    return view('mahasiswa',compact('nama','nilai'));
});