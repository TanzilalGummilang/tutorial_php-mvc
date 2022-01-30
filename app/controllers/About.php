<?php 

class About extends Controller {

	public function index(?string $name = "Tanzilal Gummilang", ?string $profession = "Programmer", ?string $age = "22" )
  {
			$data['title'] = 'About Me';
      $data['name'] = $name; 
      $data['age'] = $age;
      $data['profession'] = $profession; 

      $this->view('templates/header', $data);
      $this->view('about/index', $data);
      $this->view('templates/footer');
  }

  public function page()
  {
      $data['title'] = 'My Pages';
      
      $this->view('templates/header', $data);
      $this->view('about/page');
      $this->view('templates/footer');
  }
}

?>