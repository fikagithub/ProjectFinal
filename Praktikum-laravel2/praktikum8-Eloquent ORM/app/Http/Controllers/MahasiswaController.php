<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //kode program akan kita tulis disini
    // public function cekObject(){
    //     $mahasiswa = new Mahasiswa;
    //     dump($mahasiswa);
    //}

    public function insert()
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = '2020573010023';
        $mahasiswa->nama = 'fika adilah';
        $mahasiswa->tanggal_lahir = '2002-09-24';
        $mahasiswa->ipk ='3.5';
        $mahasiswa->save();
        dump($mahasiswa);
    }
}