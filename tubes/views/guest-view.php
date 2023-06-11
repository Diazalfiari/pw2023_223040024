<?php 
if( isset($_SESSION['login'])) {
  require 'partials/header-user.php';
}else {
  require 'partials/header-guest.php';
}

?>

<!-- Jumbotrop -->
<div class="container-fluid banner">
  <div class="container text-center">
    <h4 class="display-4" style="color: white;">Welocome to Movloperz</h4>
    <h4 class="display-6" style="color: white;">It is site where you can view information about your favourite movie. MoviesInfo ,are best known for the excellent</h4>
    <?php if( !isset ($_SESSION['login'])) {
    ?>
    <div class="ilang">
      <a href="login.php">
        <button class="btn btn-danger btn-lg">Login</button>
      </a>  
      <a href="Registrasi.php">
        <button class="btn btn-outline-danger btn-lg">Register</button>
      </a>
    </div>
    <?php } ?>
  </div>
</div>

<div class="about-box ">
        <center>
            <div class="about ">
                <h1>About this site</h1>
                <p class="about-content ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nobis officiis, labore non molestias maxime,
                    corporis saepe voluptatibus culpa sequi minus vitae qui eos expedita quos placeat consectetur voluptas
                    ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quos, aut voluptatum
                    a est distinctio cumque eveniet nisi. Soluta, aliquid tempora quae in reiciendis aut aliquam obcaecati
                    atque dolor perspiciatis?</p>
            </div>
        </center>
    </div>
<div class="about-box">
        <center>
            <div class="about">
                <h1>Movies</h1>
        </center>
    </div>


    
    <section class="p-5">
    <div class="container">

        <div class="row">
    <div class="col-md-6 mx-auto">
      <form action="" method="get">
        <div class="input-group my-3">
  <input type="search" name="keyword" id="keyword" class="form-control" placeholder="Search Student(s).." autofocus autocomplete="off">
  <button class="btn btn-primary" type="submit" name="search" id="search-button">Search</button>
        </div>
      </form>
    </div>
  </div>  


  <div id="search-container">
  <?php if($movies) : ?>
      <div class="row text-center g-4 " id="movie">
          <?php foreach($movies as $movie) : ?>
          <div class="col-md-4">
                <div class="card bg-light text-black">
                    <div class="card-body text-center">
                        <img src="image/<?= $movie['gambar']; ?>" alt="" width="175px" height="200px">
                        <h3 class="card-title mb-3"><?= $movie['judul']; ?></h3>
                        <p class="card-text"><?= $movie['tahun']; ?>
                        </p>
                        <a href="detail.php?id=<?= $movie['id']; ?>" class="btn btn-danger">lihat detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
            <?php else : ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="alert alert-danger" role="alert">
    Movie not found!
      </div>
    </div>
  </div>

  </div>
  <?php endif; ?>
</div>
    </section>


    <?php 
    
    require 'partials/ft-guest.php';
    ?>