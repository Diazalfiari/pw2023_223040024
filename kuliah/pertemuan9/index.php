<?php 
require('functions.php');
$title = 'home';
    $students = [
        [
            "nama" => "Diaz Alfiari Rachmad",
            "npm" => "223040024",
            "email" => "diazalfiari@gmail.com"
        ],
        [
            "nama" => "Hikmal Rivaldi Pellu",
            "npm" => "223040023",
            "email" => "Hikmalrivaldi@gmail.com"
        ]
    ];



    // dd($_SERVER["REQUEST_URI"]);
    // /pw2023_223040024/kuliah/pertemuan9/
    require('views/index.view.php');
?>

