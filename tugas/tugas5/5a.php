<?php 
    $mahasiswa = 
    [
        [
            "nama" => "Diaz Alfiari Rachmad",
            "NRP" => "223040024",
            "email" => "diaz.223040024@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "ozan2.png"
        ],
        [
            "nama" => "Ahmad Mulia Huda",
            "NRP" => "223040029",
            "email" => "ahmad.223040029@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "berry.png"
        ],
        [
            "nama" => "Bintang Arya Putra Yusar",
            "NRP" => "223040032",
            "email" => "bintang.223040032@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "ozan3.png"
        ],
        [
            "nama" => "Dimas Hidayatulloh",
            "NRP" => "223040020",
            "email" => "dimas.223040020@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "ozan4.png"
        ],
        [
            "nama" => "HIKMAL RYVALDI PELU",
            "NRP" => "223040023",
            "email" => "hikmal.223040023@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "hikmal.png"
        ],
        [
            "nama" => "MUHAMMAD FAUZAN DWI PUTERA",
            "NRP" => "223040033",
            "email" => "fauzan.223040033@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "ozan6.png"
        ],
        [
            "nama" => "Novan Ramdan",
            "NRP" => "223040031",
            "email" => "novan.223040031@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "ozan7.png"
        ],
        [
            "nama" => "Pramudya Dimas Wilanda",
            "NRP" => "223040005",
            "email" => "ahmad.223040005@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "ozan5.png"
        ],
        [
            "nama" => "Davina Putri Kusuma",
            "NRP" => "223040016",
            "email" => "davina.223040016@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "cat.png"
        ],
        [
            "nama" => "Rafli Ramdhani",
            "NRP" => "223040010",
            "email" => "rafli.223040010@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "ozan2.png"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
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