<?php
include_once('header.php');
require 'functions.php';

$idMovie = $_GET['id'];

foreach (listWannaWatch($idUser) as $wannaWatch) {
   if ($idMovie == $wannaWatch['movie_id']) {
      $disabledwannaWatch = 'disabled';
      break;
   } elseif ($idMovie != $wannaWatch['movie_id']) {
      $disabledwannaWatch = null;
   }
}

?>
<div class="container-full">
   <section class="movie flex-s container-md">
      <?php foreach (listMoviesById($idMovie) as $movie) : ?>
         <div class="movie__poster">
            <img src="../img/<?= $movie['image'] ?>" alt="Movie Poster">
         </div>
         <div class="movie__info">
            <h1><?= $movie['nome'] ?></h1>
            <p><?= $movie['release_date'] ?> | <?= $movie['category'] ?> | <?= $movie['running_time'] ?></p>
            <div class="movie__ratingImdb">
               <img src="../img/imdb-logo.png" alt="Logo IMDb">
               <p><?= $movie['rating_imdb'] ?> / 10</p>
            </div>

            <p><strong>Summary:</strong></p>
            <div class="summary">
               <?= $movie['summary'] ?>
            </div>
         <?php endforeach; ?>

         <div class="movie__opcoes flex">
            <form action="keepWatch.php" id="wannaWatchForm" method="post">
               <button class="btn <?= $disabledwannaWatch ?>" id="wannaWatch" type="submit" name="idMovie" value="<?= $idMovie ?>">Watch Later</button>
            </form>
         </div>


         </div>

   </section>

   <?php foreach (listMoviesById($idMovie) as $movie) : ?>
      <div class="movie__trailer flex-s flex-ai-c flex-jc-c">
         <h1>Watch the Trailer</h1>
         <iframe width="805" height="453" src="https://www.youtube.com/embed/<?= $movie['trailer_src'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
   <?php endforeach; ?>

   <section class="comments flex-c container-md">
      <h2 class="title">Tell us what you think about this movie(<?= count(listCommentByIdMovie($idMovie)) ?>)</h2>
      <form action="./keepComment.php" method="post" class="comment-form ">
         <textarea name="comment" placeholder="Leave your comment..." name="comment"></textarea>
         <button type="submit" class="btn" name="movieId" value="<?= $idMovie ?>">Send</button>
      </form>
      <?php foreach (listCommentByIdMovie($idMovie) as $comment) : ?>
         <div class="comment">
            <div class="user">
               <img src="../img/user.jpg" alt="">
               <p class="flex flex-ai-c">
                  <?= $comment['user_login'] ?>
                  <span><?= $comment['data_comment'] ?></span>
               </p>
            </div>
            <p><?= $comment['comment'] ?></p>
         </div>
      <?php endforeach; ?>
   </section>
</div>


<?php include_once('footer.php'); ?>