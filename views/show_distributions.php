<?php
  require_once(__DIR__ . '/../models/crud.php');
  $crud = new Crud();
  $movies = $crud->get('t_movies');
  $distributions = $crud->get_movies_actors_link();
?>
<div class=""><h3>Show the result :)</h3></div>
<section>
  <?php foreach ($movies as $movie): ?>
    <div id="distribution">
      <p class="distribution_text"><?php echo $movie['name']; ?></p>
      <?php foreach ($distributions as $distribution): ?>
        <?php if ($movie['name'] === $distribution['movie_name']): ?>
          <p class="distribution_text"><?php echo $distribution['actor_name']; ?></p>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</section>
