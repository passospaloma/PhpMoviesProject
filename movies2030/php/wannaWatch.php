<?php
include_once('header.php');
require 'functions.php';
?>
<div class="wannaWatch container-md">
   <h1 class="title">Watch Later</h1>

   <div class="cards">
      <?php
      foreach (listWannaWatch($idUser) as $wannaWatch) {
         $idMovie = $wannaWatch['movie_id'];
         $result = listMoviesById($idMovie);

         if (count($result) == 0) {
            echo '<p class="msg-error">No movie :(</p>';
         } else {
            foreach (listMoviesById($idMovie) as $movie) {
      ?>
               <div class="card">
                  <a href="movie.php?id=<?= $movie['id_movie'] ?>">
                     <img src="../img/<?= $movie['image'] ?>" alt="Movie Poster">
                     <p><?= $movie['name'] ?></p>
                  </a>
               </div>
      <?php
            }
         }
      }
      ?>
   </div>
</div>
<?php include_once('footer.php'); ?>