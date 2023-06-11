<?php
require('functions.php');


$id = $_GET['id'];
$movie = query("SELECT * FROM movie WHERE id = $id")[0];


if (isset($_POST["ubah"])) {
    //jalankan fungsi tambah()
    if(ubah($_POST) > 0) {
        echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'movie-list.php';
        </script>";
    }
}

require('views/ubah-view.php');
