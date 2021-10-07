<?php
  require_once(__DIR__ . '/../models/crud.php');

  $crud = new Crud();

  if (isset($_POST['movie']) && isset($_POST['actor']) && !empty($_POST['movie']) && !empty($_POST['actor']))
  {
    $movie = htmlspecialchars($_POST['movie']);
    $actor = htmlspecialchars($_POST['actor']);
    $crud->insert_movies_actors($movie, $actor);
    header('Location: /index.php');
  }
?>
