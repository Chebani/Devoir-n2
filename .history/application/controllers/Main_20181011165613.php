<?php

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('techdays');
	}

	public function creerConference(){

		$this->load->model('Model_newConf');
		$data["numeroConf"]=$this->Model_newConf->nouvelleConf();
		$this->load->view('techdays',$data);
	}
}
?>
