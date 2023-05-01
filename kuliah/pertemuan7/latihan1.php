<?php 
//variabel Superglobals / TIPE ARRAY ASSOCIATIVE
//$_GET (1)
//$_POST (2)
//$_REQUEST
//$_SERVER
//$_SESSION (3)
//$_COOKIE (4)
//$_ENV

// Variabel Scope / lingkup variabel
// $x = 10;


// function tampilX() {
//     global $x; // untuk mencari $x diluar funcion
//     echo $x;
// }

// tampilX();

// CONTOH SUPERGLOBALS
// GET
?>
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
           <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
           &NRP=<?= $mhs["NRP"]; ?>
           &email=<?= $mhs["email"]; ?>
           &jurusan=<?= $mhs["jurusan"]; ?>
           &gambar=<?= $mhs["gambar"]; ?>">
           <?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
</body>
</html>