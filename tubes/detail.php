<?php
require 'functions.php';


$id = $_GET['id'];
$movie = query("SELECT * FROM movie WHERE id = $id")[0];

require 'views/detail-view.php';
?>