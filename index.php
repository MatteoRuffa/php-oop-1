<?php
include __DIR__ . '/View/header.php';
include __DIR__ .'/Models/movie.php';
?>
<main>
    <div class="container ">
        <div class="d-flex flex-wrap ">
            <?php
            $json = file_get_contents(__DIR__ . "/Models/movie_db.json");
            $moviesData = json_decode($json);

            $movies = [];
            foreach ($moviesData as $movieData) {
                $movie = new Movie(
                    $movieData->id,
                    $movieData->title,
                    $movieData->poster_path,
                    $movieData->overview,
                    $movieData->vote_average
                );
                $movies[] = $movie;
            }

            foreach ($movies as $movie) {
                include __DIR__ . '/View/card.php';
            }
            ?>
        </div>
    </div>
</main>  
<?php
include __DIR__ . '/View/footer.php';
?>