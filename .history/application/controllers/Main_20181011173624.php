<?php

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('techdays');
	}

	public function creerConference(){

		$this->load->model('Model_newConf');
		$this->load->model('Model_niveau');
		$this->load->model('Model_theme');
		$this->load->model('Model_techno');
		$data["numeroConf"]=$this->Model_newConf->nouvelleConf();
		$data["lesNiveaux"]=$this->Model_niveau->getAllNiveaux();
		$data["lesThemes"]=$this->Model_theme->getAllThemes();
		$data["lesTechnologies"]=$this->Model_techno->getAllTechnologies();
		$this->load->view('newConference',$data);
	}
}
?>
