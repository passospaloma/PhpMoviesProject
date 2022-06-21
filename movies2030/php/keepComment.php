<?php
require 'functions.php';

$comment = $_POST['comment'];
$idMovie = $_POST['movieId'];

session_start();

$userLogged = $_SESSION['userLogged'];
$loginUser = $userLogged['login'];

addCommentById($comment, $idMovie, $loginUser);

header("location: movie.php?id={$idMovie}");
die;
