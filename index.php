<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movies Library</title>
    <link rel="stylesheet" href="./assets/css/index.css">
  </head>
  <body>
      <?php require_once('./views/header.php') ?>
      <div id="form_insert_values">
        <?php require_once('./views/add_movies.php') ?>
        <?php require_once('./views/add_actors.php') ?>
      </div>
      <div class="">
        <?php require_once('./views/link_actors_to_movies.php') ?>
      </div>
      <div>
        <?php require_once('./views/show_distributions.php') ?>
      </div>
  </body>
</html>
