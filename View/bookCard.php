<div class="p-2">
    <div class="card mb-3" style="max-width: 540px; height: 390px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="<?php echo $book->thumbnailUrl ?>" class="w-100 rounded-start" alt="<?php echo $book->title ?>">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?php echo $book->title ?></h5>
            <p style="height: 200px; overflow: auto;" class="card-text"><?php echo $book->longDescription ?></p>
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
    </div>
</div>
