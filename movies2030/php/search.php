<?php
require 'functions.php';

$movie = $_POST['movie'];

$search = search($movie);

if (count($search) == 0) {
   header("location: movies.php?error=movie-not-found");
   exit;
}

foreach ($search as $id) {
   header("location: movie.php?id={$id['id_movie']}");
   die;
}
