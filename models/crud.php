<?php
  require_once(__DIR__ . '/connect_db.php');
  /**
   *
   */
  class Crud extends Connect
  {

    public function insert($table, $value)
    {
      try {
        $exec = $this->PDO->prepare("INSERT INTO $table (name) VALUES (?)");
        return $exec->execute([$value]);
      } catch (PDOException $e) {
        echo "Error during value insertion : " . $e->getMessage();
      }
    }

    public function get($table)
    {
      try {
        $exec = $this->PDO->prepare("SELECT * FROM $table");
        $exec->execute();
        return $exec->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
        echo "Error during value get : " . $e->getMessage();
      }
    }

    public function insert_movies_actors($movie_id, $actor_id)
    {
      try {
        $exec = $this->PDO->prepare("INSERT INTO `t_movies_actors` (movie_id, actor_id) VALUES (?,?)");
        return $exec->execute([$movie_id, $actor_id]);
      } catch (PDOException $e) {
        echo "Error during value insertion : " . $e->getMessage();
      }
    }

    public function get_movies_actors_link()
    {
      $exec = $this->PDO->prepare('SELECT t_movies.name as movie_name, t_actors.name as actor_name
        FROM t_movies_actors
        INNER JOIN t_movies ON t_movies_actors.movie_id = t_movies.id
        INNER JOIN t_actors ON t_movies_actors.actor_id = t_actors.id');
      $exec->execute();
      return $exec->fetchAll(PDO::FETCH_ASSOC);
    }
  }

?>
