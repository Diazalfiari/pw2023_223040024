<?php 
require '../functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM
    movie
    WHERE
    judul LIKE '%$keyword%' OR
    tahun LIKE '%$keyword%'
    ";
$movies = query($query);
?>

<?php if($movies) : ?>
      <div class="row text-center g-4 ">
          <?php foreach($movies as $movie) : ?>
          <div class="col-md-4">
                <div class="card bg-light text-black">
                    <div class="card-body text-center">
                        <img src="image/<?= $movie['gambar']; ?>" alt="" width="175px" height="200px">
                        <h3 class="card-title mb-3"><?= $movie['judul']; ?></h3>
                        <p class="card-text"><?= $movie['tahun']; ?>
                        </p>
                        <a href="#" class="btn btn-danger">lihat detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
            <?php else : ?>
  <div class="row">
    <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
    Student not found!
      </div>
    </div>
  </div>

  </div>
  <?php endif; ?>