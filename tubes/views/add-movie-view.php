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
    <div class="col-md-8 mx-auto">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 ">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" name="judul" id="judul"  autofocus required>
        </div>
        <div class="mb-3">
          <label for="teks" class="form-label">Teks</label>
          <input type="text" class="form-control" name="teks" id="teks">
        </div>
        <div class="mb-3">
          <label for="tahun" class="form-label">Tahun</label>
          <input type="text" class="form-control" name="tahun" id="tahun">
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="file" class="form-control" name="gambar" id="gambar">
        </div>
        <div class="mb-3">
          <label for="kategori" class="form-label">kategori</label>
          <input type="text" class="form-control" name="kategori" id="kategori">
        </div>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
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