<?php
require 'functions.php';

$idMovie = $_POST['idMovie'];

session_start();
$userLogged = $_SESSION['userLogged'];
$idUser = $userLogged['id_user'];

foreach (listWannaWatch($idUser) as $wannaWatch) {
   if ($idMovie == $wannaWatch['movie_id']) {
      deleteWannaWatch($idMovie);
      header("location: movie.php?id={$idMovie}");
      die;
   }
}

addWannaWatch($idMovie, $idUser);

header("location: movie.php?id={$idMovie}");
die;
