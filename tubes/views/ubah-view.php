<?php 

require 'views/partials/header-das.php';
require 'views/partials/nav-das.php';

?>

<div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <h1>Add Movie</h1>  
                    </div>
                <div class='card-body'>
        <table class="table">
          <div class="row">
    <div class="col-md-8">
      <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $movie['id']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $movie['gambar']; ?>">
        <div class="mb-3 ">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" name="judul" id="judul"  autofocus required value="<?= $movie['judul']; ?>">
        </div>
        <div class="mb-3">
          <label for="teks" class="form-label">Teks</label>
          <input type="text" class="form-control" name="teks" id="teks" value="<?= $movie['teks']; ?>">
        </div>
        <div class="mb-3">
          <label for="tahun" class="form-label">Tahun</label>
          <input type="text" class="form-control" name="tahun" id="tahun" value="<?= $movie['tahun']; ?>">
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <img src="image/<?= $movie['gambar']; ?>" alt="">
          <input type="file" class="form-control" name="gambar" id="gambar">
        </div>
        <div class="mb-3">
          <label for="kategori" class="form-label">kategori</label>
          <input type="text" class="form-control" name="id_kategori" id="kategori" value="<?= $movie['id_kategori']; ?>">
        </div>
        <button class="btn btn-primary" type="submit" name="ubah">Ubah Data</button>
      </form>
    </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 

require 'views/partials/footer-das.php';
?>