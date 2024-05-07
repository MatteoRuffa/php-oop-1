<?php
include __DIR__ . '/View/header.php';
include __DIR__ .'/Models/Product.php';
include __DIR__ .'/Models/Movie.php';
include __DIR__ .'/Models/Book.php';
?>
<main>
    <div class="container ">
        <div class="d-flex flex-wrap ">
            <?php
            $moviejson = file_get_contents(__DIR__ . "/Models/movie_db.json");
            $moviesData = json_decode($moviejson);

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

            $bookjson = file_get_contents(__DIR__ . "/Models/books_db.json");
            $booksData = json_decode($bookjson);

            $books = [];
            foreach ($booksData as $bookData) {
                $book = new Book(
                    $bookData->id,
                    $bookData->title,
                    $bookData->pageCount,
                    $bookData->thumbnailUrl,
                    $bookData->longDescription,
                    $bookData->authors
                );
                $books[] = $book;
            }

            foreach ($books as $book) {
                include __DIR__ . '/View/bookCard.php';
            }
            ?>
        </div>
    </div>
</main>  
<?php
include __DIR__ . '/View/footer.php';
?>