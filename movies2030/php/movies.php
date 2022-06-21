<?php
include_once('header.php');
require 'functions.php';
?>

<section class="movies container">
    <?php
    if (isset($_GET['error']) == 'movie not found') {
        echo "<p class='msg-error'>this movie is not registered yet :/<p>";
    }
    ?>
    <div class="cards">
        <?php
        $result = listMovies();

        if (count($result) == 0) {
            echo '<p class="msg-error">no movie registered :(</p>';
        } else {
            foreach (listMovies() as $movie) {
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
<?php include_once('footer.php') ?>