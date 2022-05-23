<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
               {{--@component('layout.alert')
                @slot('class')
                warning
                @endslot
                100 Data Mahasiswa Perlu Diperbaiki
                @endcomponent
                @component('layout.alert')
                @slot('class')
                danger
                @endslot
                Hari Ini Deadline Laporan Perjalanan Dinas!
                @endcomponent
                @component('layout.alert')
                @slot('class')
                success
                @endslot
                Bulan Depan Cuti Panjang ....
                @endcomponent
                --}}
                <!-- menggirim satu variabel lagi untuk Judul -->
                <h4>Menambahkan variabel pada file resource/views/layout/alert.blade.php</h4>
                @component('layout.alert')
                @slot('class')
                warning
                @endslot
                @slot('judul')
                Peringatan
                @endslot
                100 Data Mahasiswa Perlu Diperbaiki
                @endcomponent
                @component('layout.alert')
                @slot('class')
                danger
                @endslot
                @slot('judul')
                Awas
                @endslot
                Hari Ini Deadline Laporan Perjalanan Dinas!
                @endcomponent
                @component('layout.alert')
                @slot('class')
                success
                @endslot
                @slot('judul')
                Kabar Baik
                @endslot
                Bulan Depan Cuti Panjang ...
                @endcomponent
                <!-- alert assosiatif array -->

                <h4>Menambahkan Variabel pada component nya </h4>
                @component('layout.alert',['class' => 'warning', 'judul'=>'Peringatan', ])
                100 Data Mahasiswa Perlu Diperbaiki
                @endcomponent
                @component('layout.alert',['class' => 'danger', 'judul'=>'Awas', ])
                Hari Ini Deadline Laporan Perjalanan Dinas!
                @endcomponent
                @component('layout.alert',['class' => 'success', 'judul'=>'Kabar Baik', ])
                Bulan Depan Cuti Panjang
                @endcomponent
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>