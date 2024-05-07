<div class="p-2">
    <div class="card" style="width: 18rem;">
    <img src="<?php echo $book->thumbnailUrl ?>" class="card-img-top" alt="<?php echo $book->title ?>">
    <div class="card-body">
        <h5 style="height: 70px;" class="card-title"><?php echo $book->title ?></h5>
        <p style="height: 200px; overflow: auto;" 
        class="card-text"><?php echo $book->longDescription ?></p>
        <p><strong>Autore,i: </strong><?php 
        for ($i = 0; $i < count($book->authors); $i++) {
            echo $book->authors[$i];
            if ($i != count($book->authors) - 1) { 
                echo ", ";
            }
        }
        ?></p>
        <p><strong>Pagine: </strong><?php echo $book->pageCount ?></p>
    </div>
    </div>
</div>