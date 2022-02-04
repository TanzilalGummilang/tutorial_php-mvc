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

  public function detail($playerCode)
  {
    $data['title'] = 'Detail Pemain';
    $data['players'] = $this->model('Players_model')->getPlayerByCode($playerCode);

    $this->view('templates/header', $data);
    $this->view('players/detail', $data);
    $this->view('templates/footer');
  }

  public function insert()
  {
    if($this->model('Players_model')->insertPlayerData($_POST) > 0) {
      header('location: '.BASEURL.'/players');
      exit;
    }
  }
}

?>