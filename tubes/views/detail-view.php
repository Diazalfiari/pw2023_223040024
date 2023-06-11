<?php 
require 'partials/header-guest.php';
?>

<head>
    <link rel="stylesheet" href="css/style-det.css">
</head>
<section class="card">
    <div class="header">
    <input type="hidden" name="id" value="<?= $movie['id']; ?>">
        <img src="image/<?= $movie['gambar']; ?>" alt="">
        <div class="header-text">
            <h3><?= $movie['judul']; ?></h3>
            <p>Tahun: <?= $movie['tahun']; ?></p>
        </div>
    </div>
    <div class="sinopsis">
        <p><?= $movie['teks']; ?></p>
    </div>
  </section>
  <!-- footer -->
  <footer class="footer">
  <p class="copy">Copyright 2023. Diaz Alfiari Rachmad.</p>
</footer>