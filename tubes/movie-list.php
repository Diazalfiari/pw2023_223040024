<?php 

require 'functions.php';

$movies = query("SELECT * FROM movie");

require ('views/movie-list-view.php');
?>

