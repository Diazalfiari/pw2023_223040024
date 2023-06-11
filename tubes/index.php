<?php
require 'functions.php';

session_start();

if (isset($_SESSION['status'])) {
    $user_logged_in = $_SESSION['status'];

    // Periksa apakah pengguna sudah login berdasarkan informasi session
    if (isset($_SESSION['status'])) {
        // Pengguna sudah login
        if ($_SESSION['status'] == 'admin') {
            $user_logged_in = 'admin';
        } else {
            $user_logged_in = 'user';
        }
        $user_logged_in = true;
    } else {
        // Pengguna belum login
        $user_logged_in = false;
    }
}

//cari siswa berdasarkan keyword, ketika tombol di klik
if(isset($_GET['search'])){
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM
    movie
    WHERE
    judul LIKE '%$keyword%' OR
    tahun LIKE '%$keyword%' OR 
    ";
$movies = query($query);
}else {
    $movies = query("SELECT * FROM movie");

}
require 'views/guest-view.php';
?>