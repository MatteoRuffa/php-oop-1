<div class="p-2">
    <div class="card" style="width: 18rem;">
    <img src="<?php echo $movie->poster_path ?>" class="card-img-top" alt="<?php echo $movie->title ?>">
    <div class="card-body">
        <h5 style="height: 70px" class="card-title"><?php echo $movie->title ?></h5>
        <p style="height: 200px; overflow: auto;" 
        class="card-text"><?php echo $movie->overview ?></p>
    </div>
    </div>
</div>