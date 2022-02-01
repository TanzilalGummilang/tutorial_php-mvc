<?php 

class Players_model
{  
  private $table = 'players_table';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPlayers()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getPlayerByCode($playerCode)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE player_code=:player_code');
    $this->db->bind('player_code', $playerCode);
    return $this->db->singleSet();
  }

}

?>