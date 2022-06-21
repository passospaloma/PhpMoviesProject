<?php
include_once 'header.php';
require 'functions.php';
?>

<section class="profile">
   <div class="profile__user container-full flex flex-ai-c ">
      <img src="../img/user.jpg" alt="user image">
      <h1 class="flex flex-ai-c "><?= $userLogged['name'] ?></h1>
      <a href="./logout.php" class="btn flex flex-ai-c ">Logout</a>
   </div>

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
               $j = 0;
               foreach (listMoviesById($idMovie) as $movie) {
                  if ($j == 4) {
                     break;
                  } else {
                     $j++;
                  }
         ?>
                  <div class="card">
                     <a href="movie.php?id=<?= $movie['id_movie'] ?>">
                        <img src="../img/<?= $movie['image'] ?>" alt="Movie poster">
                        <p><?= $movie['name'] ?></p>
                     </a>
                  </div>

         <?php
               }
            }
         }
         ?>
         <div class="card flex flex-ai-c flex-jc-c">
            <a href="wannaWatch.php">
               <p>View more</p>
            </a>
         </div>
      </div>
   </div>
</section>



<?php include_once('footer.php'); ?>