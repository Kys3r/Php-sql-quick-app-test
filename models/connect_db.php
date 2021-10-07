<?php

/**
 *
 */
class Connect
{
  public $PDO;

  public function __construct()
  {
    $this->PDO = new PDO("mysql:host=localhost;dbname=db_movies", "root", "root");
    $this->PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		$this->PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  }
}

?>
