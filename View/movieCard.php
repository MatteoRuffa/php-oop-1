<div class="p-2">
    <div class="card" style="width: 18rem; background-color: rgb(8, 8, 8); color: gray;">
    <img src="<?php echo $movie->poster_path ?>" class="card-img-top" alt="<?php echo $movie->title ?>">
    <div class="card-body">
        <h5 style="height: 70px;" class="card-title"><?php echo $movie->title ?></h5>
        <p style="height: 200px; overflow: auto;" 
        class="card-text"><?php echo $movie->getDetails() ?></p>
    </div>
    </div>
</div>