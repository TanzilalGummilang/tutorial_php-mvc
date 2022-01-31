<?php 

class Players extends Controller
{
  public function index()
  {
    $data['title'] = 'Daftar Pemain';
    $data['players'] = $this->model('Players_model')->getAllPlayers();

    $this->view('templates/header', $data);
    $this->view('players/index', $data);
    $this->view('templates/footer');
  }
}

?>