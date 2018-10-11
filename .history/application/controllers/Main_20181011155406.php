<?php

class Main extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('techdays');
	}

	public function creerConference(){
		$this->load->view('newConference');
	}
}
?>
