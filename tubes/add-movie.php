<?php 


require 'functions.php';

//ketika tombol submit di klik
if (isset($_POST["tambah"])) {
    //jalankan fungsi tambah()
    if(tambah($_POST) > 0) {
        echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'add-movie.php';
        </script>";
    }
}


require ('views/add-movie-view.php');
?>