<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <!-- <h1>Daftar Mahasiswa</h1>
    <ol>
        <li>Fika Adilah</li>
        <li>Ulvi Sahara</li>
        <li>Rika Amanda</li>
        <li>Ichsana Sabila</li>  -->

        <!-- <h1>Daftar Mahasiswa</h1>
        <ol>
        <li><?php echo $mahasiswa01; ?></li>
        <li>Ulvi Sahara</li>
        <li>Rika Amanda</li>
        <li>Ichsana Sabila</li> -->
        
        <!-- <h1>Daftar Mahasiswa</h1>
        <ol>
        <li><?php echo $mahasiswa01; ?></li>
        <li><?php echo $mahasiswa02; ?></li>
        <li><?php echo $mahasiswa03; ?></li>
        <li><?php echo $mahasiswa04; ?></li>
        </ol>  

        <h1>Daftar Mahasiswa</h1>
        <ol>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa0[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>
        </ol>   -->

    <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php foreach ($mahasiswa as $nama){
            echo "<li>$nama</li>";
        }
        ?>
    </ol>

    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa01; ?></li>
    </ol>  

    <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php foreach ($mahasiswa as $nama){
            echo "<li>$nama</li>";
        }
        ?>
    </ol>

    <div> copyright &copy; <?php echo date("Y"); ?>Program Studi Teknik Informatika - PNL </div>
    </ol>
</body>
</html>