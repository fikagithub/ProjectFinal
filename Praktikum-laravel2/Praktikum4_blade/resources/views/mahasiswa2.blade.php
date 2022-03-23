<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php //echo $nama ?>
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php //echo $nilai ?>
        </h1>
    </div>

    //<div> copyright &copy; <?php //echo date("Y"); ?>Program Studi Teknik Informatika - PNL </div>
    </ol>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
        <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{ $nama }}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{ $nilai }}
        </h1>
    </div>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
        <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {!! $nama !!}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {!! $nilai !!}
        </h1>
    </div>
</body>
</html> -->

<!--Kondisi If Else-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
        <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{ $nama }}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{  $nilai  }}
        </h1>
        <br>
        @if (($nilai >= 0) and ($nilai < 50))
        <div class="alert alert-danger d-inline-block">Maaf, anda tidak lulus</div>
        @elseif(($nilai >= 50) and ($nilai <= 100))
        <div class="alert alert-success d-inline-block">Selamat, anda lulus</div>
        @else
        <div class="alert alert-dark d-inline-block">Nilai Tidak Valid</div>
        @endif
        </div>
</body>
</html> -->

<!--Kondisi Switch-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
        <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h1>
        <br>
        @switch($nilai)
        @case(0)
        <div class="alert alert-danger d-inline-block">Tidak ikut ujian</div>
        @break
        @case(75)
        <div class="alert alert-success d-inline-block">Lumayan</div>
        @break
        @case(100)
        <div class="alert alert-dark d-inline-block">Sempurna</div>
        @break
        @default
        <div clas="alert alert-dark d-inline-block">Nilai tidak valid</div>
        @endswitch
        </div>
</body>
</html> -->

<!--Perulangan For-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
        <div class="container text-center mt-3 pt-3 bg-white">
        @for ($i = 0; $i < 5; $i++)
        <div clas="alert alert-info d-inline-block">
        {{ $i }}
        </div>
        @endfor
        </div>
</body>
</html> -->

<!--Perulangan while-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
        <div class="container text-center mt-3 pt-3 bg-white">
        <?php //$i = 0; ?>
        @while($i < 5)
        <div clas="alert alert-info d-inline-block">
        {{ $i }}
        </div>
        <?php //$i++ ?>
        @endwhile
        </div>
</body>
</html> -->

<!--Perulangan Foreach-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
        <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @foreach ($nilai as $val)
        @if (($val >= 0)and ($val < 50))
        <div class="alert alert-danger d-inline-block">
        {{$val}}
        </div>
        @elseif (($val >= 50)and ($val <= 100))
        <div clas="alert alert-success d-inline-block">
        {{ $val }}
        </div>
        @endif
        @endforeach
        </div>
</body>
</html> -->

<!--Perulangan Forelse-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
        <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <br>
        @forelse ($nilai as $val)
        @if (($val >= 0)and ($val < 50))
        <div class="alert alert-danger d-inline-block">
        {{$val}}
        </div>
        @elseif (($val >= 50)and ($val <= 100))
        <div clas="alert alert-success d-inline-block">
        {{ $val }}
        </div>
        @endif
        @empty
        <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
        @endforelse
        </div>
</body>
</html> -->

<!--Perintah Continue dan Break-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
        <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <br>
        @foreach ($nilai as $val)
        @if ($val < 50)
        @break
        @endif
        <div class="alert alert-success d-inline-block">
        {{ $val }}
        </div>
        @endforeach
        </div>
</body>
</html>

<!--Baris komentar dan php mode-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
        <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <br>
        {{-- 
        @foreach ($nilai as $val)
        @if ($val <div 50)
        @break
        @endif
        <div class="alert alert-success d-inline-block">
        {{ $val }}
        </div>
        @endforeach
        --}}
        </div>
</body>
</html>