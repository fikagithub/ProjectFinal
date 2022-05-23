<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function home()
    {
        // return("Ini adalah halaman mahasiswa");
        $arrMahasiswa = ["Luhut Panjaitan", "Jokowi", "Vladimir Putin", "Lisa Permata"];
        return view('home')->with('home', $arrMahasiswa);
    }
    public function profile()
    {
        $arrDosen = ["Luhut Panjaitan", "Jokowi", "Vladimir Putin", "Lisa Permata"];
        return view('profile')->with('profile', $arrDosen);
    }
    public function product()
    {

        return view('product');
    }
    public function contact()
    {

        return view('contact');
    }

    public function info($jurusan, $prodi)
    {
        $data = ['Di Informasikan Pada Saat Ramadhan Kuliah Hanya Libur Dua Minggu', 'Di Informasikan Pada Saat Ramadhan Kuliah Hanya Libur Dua Minggu Dan Menurut Dosen Nya'];
        return view('informasi')->with('data', $data);
    }

}
