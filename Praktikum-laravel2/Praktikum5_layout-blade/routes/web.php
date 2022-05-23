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

Route::get('/', function () {
    return view('welcome');
});

Route::get('mahasiswa', function () {
    $arrMahasiswa = [
        "Farah Salsabila", "Ichsana Sabila", "Deby Zamzam Firdaus", "Fika Adilah",
    ];
    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
});

Route::get('dosen', function () {
    $arrDosen = [
        "Pak Amirullah", "Pak Abdi", "Pak Rizka", "Pak Mahlil",
    ];
    return view('dosen')->with('dosen', $arrDosen);
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('admin', function () {
    return view('admin');
});