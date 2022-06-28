<?php
require __DIR__ . '/../library/movies.php';
$movies = allMovies();
?>

<section class="movie-detail-container">
    <?php
    foreach ($movies as $movie) :
    ?>
        <div class="center-container">
            <div id="description" class="description">
                <img src="./assets/<?= $movie->image; ?>" alt="imagen con la portada de la pelicula ">
                <h2><?= $movie->title; ?></h2>
                <p><?= $movie->duration; ?></p>
                <p class="movie-detail"><?= $movie->short_description; ?></p>
            </div>
            <div class="review-container">
                <div class="show-comment-input"></div>
                <input id="comment-input" class="comment-input" type="text" placeholder="Agrega un comentario">
                <button class="detail-a home-button"><a href="/index.html">Ir al inicio</a></button>
                <button id="send-btn" class="detail-a" type="submit" onclick="sendComment()">Enviar</button>
            </div>
        </div>
    <?php
    endforeach;
    ?>
</section>