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

		$this->load->view('newConference',$data);
	}
}
?>
