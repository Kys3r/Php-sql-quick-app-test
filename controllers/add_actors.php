<?php
  require_once(__DIR__ . '/../models/crud.php');
  session_start();

  $crud = new Crud();

  if (isset($_POST['actor']) && !empty($_POST['actor']))
  {
    $actor = htmlspecialchars($_POST['actor']);
    $crud->insert('t_actors', $actor);
    header('Location: /index.php');
  }
?>
