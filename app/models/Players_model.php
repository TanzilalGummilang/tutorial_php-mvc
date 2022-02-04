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

  public function insertPlayerData($data)
  {
    $query = 
      "INSERT INTO players_table VALUES
      (:player_code, :player_name, '', :player_number, :position, '', '', '', '', '', '', '')";

    $this->db->query($query);
    $this->db->bind('player_code', $data['player-code']);
    $this->db->bind('player_name', $data['player-name']);
    $this->db->bind('player_number', $data['player-number']);
    $this->db->bind('position', $data['position']);

    $this->db->execute();

    return $this->db->rowCount();
  }

}

?>