<?php 

class User_model
{
  private ?string $name = 'Tanzilal Gummilang';

  public function getUser()
  {
    return $this->name;
  }
}

?>