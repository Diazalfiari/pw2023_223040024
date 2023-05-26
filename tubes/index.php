<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movloperz</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="scss/owl.carousel.min.css">
    <link rel="stylesheet" href="scss/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
<?php 
include "navbar.php";
?>
<!-- Jumbotrop -->
<div class="container-fluid banner">
  <div class="container text-center">
    <h4 class="display-4">Selamat di website kami</h4>
    <h3 class="display-6">silahkan klik di bawah sini untuk ke halaman rekomendasi film</h3>
    <a href="#trending">
      <button class="btn btn-danger btn-lg">kuy</button>
    </a>
  </div>
</div>
<!-- item -->
<div class="container-fluid Trending pt-5 pb-5">
  <div class="container text-center">
    <h2 class="display-3" id="trending" style="color: white !important; padding-top: 75px;">Trending</h2>
  </div>
</div>

<!-- owl card -->

<div class="owl-carousel owl-theme">
    <div class="item"><img src="img/FilosopiKopi2.jpg" alt="" width="50"></div>
    <div class="item"><a href="detail/detail2.php"><img src="img/MencuriRadenSaleh.jpg" alt=""></a></div>
    <div class="item"><img src="img/MiracleInCell.jpg" alt=""></div>
    <div class="item"><img src="img/PerfectStrangers.jpg" alt="" ></div>
    <div class="item"><img src="img/SerigalaTerakhir2.jpg" alt="" ></div>
    <div class="item"><img src="img/FilosopiKopi2.jpg" alt="" ></div>
    <div class="item"><img src="img/FilosopiKopi2.jpg" alt=""></div>
    <div class="item"><img src="img/FilosopiKopi2.jpg" alt=""></div>
    <div class="item"><img src="img/FilosopiKopi2.jpg" alt=""></div>
    <div class="item"><img src="img/FilosopiKopi2.jpg" alt=""></div>

</div>
<!-- card -->
<article>
  <section class="card">
    <div class="text-content">
      <h3>Filosopi Kopi 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="detail/detail1.php">Lihat selengkapnya</a>
    </div>
    <div class="visual">
      <img src="img/FilosopiKopi2.jpg" alt="">
    </div>
  </section>
</article>
<article>
  <section class="card">
    <div class="text-content">
      <h3>Mencuri Raden Saleh</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="detail/detail2.php">Lihat selengkapnya</a>
    </div>
    <div class="visual">
      <img src="img/MencuriRadenSaleh.jpg" alt="">
    </div>
  </section>
</article>
<article>
  <section class="card">
    <div class="text-content">
      <h3>Miracle In Cell no.7</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="detail/detail3.php">Lihat selengkapnya</a>
    </div>
    <div class="visual">
      <img src="img/MiracleInCell.jpg" alt="">
    </div>
  </section>
</article>
<article>
  <section class="card">
    <div class="text-content">
      <h3>Perfect Strangers</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="detail/detail4.php">Lihat selengkapnya</a>
    </div>
    <div class="visual">
      <img src="img/PerfectStrangers.jpg" alt="">
    </div>
  </section>
</article>
<article>
  <section class="card">
    <div class="text-content">
      <h3>Serigala terakhir 2</h3>
      <p>Alex (Abimana Aryasatya) ingin bertemu Aryati (Hannah Al Rashid) dan keluarganya. Namun, pertemuan tersebut terhalang dengan berbagai konflik yang terjadi dari berbagai pihak, seperti Naga Hitam, Laba-Laba Merah, ormas Balabadik, dan Unit Khusus Polisi bernama Denpator.
      </p>
      <a href="detail/detail5.php">Lihat selengkapnya</a>
    </div>
    <div class="visual">
      <img src="img/SerigalaTerakhir2.jpg" alt="">
    </div>
  </section>
</article>

<!-- footer -->
<footer class="footer">
  <p class="copy">Copyright 2023. Diaz Alfiari Rachmad.</p>
</footer>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script>
  </body>
</html>