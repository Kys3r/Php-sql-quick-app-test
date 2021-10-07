<?php

  require_once('db_infos.php');

  $drop_t_movies = "DROP TABLE IF EXISTS t_movies";
  $drop_t_actors = "DROP TABLE IF EXISTS t_actors";
  $drop_movies_actors = "DROP TABLE IF EXISTS t_movies_actors";

  $create_actors = "CREATE TABLE IF NOT EXISTS t_actors(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(128) NOT NULL
  )";

  $create_movies = "CREATE TABLE IF NOT EXISTS t_movies(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(128) NOT NULL
  )";

  $create_movies_actors = "CREATE TABLE IF NOT EXISTS t_movies_actors(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    movie_id INT UNSIGNED NOT NULL,
    actor_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (movie_id) REFERENCES t_movies (id) ON DELETE CASCADE,
    FOREIGN KEY (actor_id) REFERENCES t_actors (id) ON DELETE CASCADE
  )";

  $add_movies = "INSERT INTO t_movies(name)
    VALUES
      ('Interstellar'),
      ('Inception'),
      ('The wolf of wall street'),
      ('Gattaca'),
      ('Harry Potter')";

  $add_actors = "INSERT INTO t_actors(name)
    VALUES
      ('Leonardo Di Caprio'),
      ('Matthew McConaughey'),
      ('Jude Law'),
      ('Daniel Radcliffe')";

  $add_actors_movies = "INSERT INTO t_movies_actors(movie_id, actor_id)
    VALUES
      ('1', '2'),
      ('2', '1'),
      ('3', '1'),
      ('3', '2'),
      ('4', '3'),
      ('5', '4')";

  try {
    $sql = new PDO($DB_DSN , $DB_USER, $DB_PASSWORD);
    $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql->exec("CREATE DATABASE IF NOT EXISTS $DB_NAME");
    $sql->exec('use db_movies');
    $sql->exec($drop_t_movies);
    $sql->exec($drop_t_actors);
    $sql->exec($drop_movies_actors);
    $sql->exec($create_actors);
    $sql->exec($create_movies);
    $sql->exec($create_movies_actors);
    $sql->exec($add_movies);
    $sql->exec($add_actors);
    $sql->exec($add_actors_movies);

  } catch (PDOException $e) {
    echo "Error during database setup : " . $e->getMessage();
  }

?>
