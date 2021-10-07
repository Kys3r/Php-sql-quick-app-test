<?php
  require_once(__DIR__ . '/../models/crud.php');

  $crud = new Crud();

  if (isset($_POST['movie']) && !empty($_POST['movie']))
  {
    $movie = htmlspecialchars($_POST['movie']);
    $crud->insert('t_movies', $movie);
    header('Location: /index.php');
  }
?>
