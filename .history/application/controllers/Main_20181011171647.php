<?php

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('techdays');
	}

	public function creerConference(){

		$this->load->model('Model_newConf');
		$this->load->model('Model_niveau');
		$data["numeroConf"]=$this->Model_newConf->nouvelleConf();
		$data["niveau"]=$this->Model_niveau->getAllNiveaux();
		$this->load->view('newConference',$data);
	}
}
?>
