<?php 

class Players_model
{
  private $dbh;
  private $stmt;

  public function __construct()
  {
    $dsn = 'mysql:host=localhost:3306;dbname=db_chelsea_fc';
    $user = 'root';
    $password = '';

    try{
      $this->dbh = new PDO($dsn, $user, $password);
    }catch(PDOException $e){
      die($e->getMessage());
    }
  }
  
  public function getAllPlayers()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM players_table');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

?>