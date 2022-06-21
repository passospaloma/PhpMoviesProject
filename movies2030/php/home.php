<?php
include_once("header.php");
require 'functions.php';
?>

<?php
$max = count(listMovies());
$ran = rand(1, $max);
?>

<section class="trouble">
   <div class="trouble__text container flex-c flex-ai-c flex-jc-c">
      <h1 class="title">Having trouble choosing a movie?</h1>
      <a href="movie.php?id=<?= $ran ?>" class="btn flex flex-ai-c flex-jc-c">Choose a random one</a>
   </div>
</section>

<section class="home container-md">
   <h1 class="title">New Releases</h1>

   <div class="cards">
      <?php
      $result = listRecentMovies();

      if (count($result) == 0) {
         echo '<p class="msg-error">No movie :(</p>';
      } else {
         foreach (listRecentMovies() as $movie) {
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
      ?>
   </div>
</section>

<?php include_once('footer.php'); ?>