
    <!-- Array associative -->
    <!-- definisinya sama seperti numerik, kecuali -->
    <!-- key-nya adalah string yg kita buat sendiri -->
<?php 
    $mahasiswa = 
    [
        [
            "nama" => "Diaz Alfiari Rachmad",
            "NRP" => "223040024",
            "email" => "diaz.223040024@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "ozan.png"
        ],
        [
            "nama" => "Ahmad Mulia Huda",
            "NRP" => "223040021",
            "email" => "ahmad.223040024@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "ozan.png"
        ]
    ];


    echo $mahasiswa[0]["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?> "></li>
            <li>Nama :<?= $mhs["nama"]; ?></li>
            <li>NRP :<?= $mhs["NRP"]; ?></li>
            <li>email :<?= $mhs["email"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>





</body>
</html>
