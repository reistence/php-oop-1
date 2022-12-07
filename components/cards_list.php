<?php

include_once __DIR__ . "/../db.php"

?>



<div class="container">
<div class="wrapper">
     <?php foreach($my_movies as $movie) {?>
    <div class="card">
      
        <h2 class="card-title"> <?php echo $movie->title ?></h2>
        <h4 class="director">  <?php echo $movie->director ?></h4>
        <p class="genres">  <?php echo $movie->genres->printGenres()?></p>
         <p class="cast">  <?php $movie->printCast()?></p>
        <p class="duration"> <?php echo $movie->duration ?></p>
        <p class="rating"> <?php  echo  $movie->rating ?></p>
    </div>
    <?php } ?>
</div>



</div>