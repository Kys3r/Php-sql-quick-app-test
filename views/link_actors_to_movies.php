<?php
  require_once(__DIR__ . '/../models/crud.php');
  $crud = new Crud();
  $movies = $crud->get('t_movies');
  $actors = $crud->get('t_actors');
?>

<div class=""> <h3>Link an actor and a movie together</h3> </div>
<form id="form_link" action="../controllers/link_actors_to_movies.php" method="post">
  <select class="select_values" name="movie">
    <?php foreach ($movies as $value) { ?>
      <option value=<?php echo $value['id'] ?>><?php echo $value['name'] ?></option>
    <?php } ?>
  </select>
  <select class="select_values" name="actor">
    <?php foreach ($actors as $value) { ?>
      <option value=<?php echo $value['id'] ?>><?php echo $value['name'] ?></option>
    <?php } ?>
  </select>
  <button type="submit" name="button">Submit</button>
</form>
