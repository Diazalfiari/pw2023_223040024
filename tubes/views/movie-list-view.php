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
                        <h1>Movie List</h1>
                    </div>
                    <div class='card-body'>
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Teks</th>
      <th scope="col">Tahun</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
    <?php foreach ($movies as $movie) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $movie['judul']; ?></td>
      <td><?= $movie['teks']; ?></td>
      <td><?= $movie['tahun']; ?></td>
      <td><img src="image/<?= $movie['gambar']; ?>" alt="gambar movie" width="200"></td>
      <td>
         <a href="ubah.php?id=<?= $movie['id']; ?>" class="badge  text-bg-warning">ubah</a> |
         <a href="hapus.php?id=<?= $movie['id']; ?>" class="badge  text-bg-danger" onclick="return confirm('Yakin?');">hapus</a>
      </td>
      <?php $i++; ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 

require 'views/partials/footer-das.php';
?>