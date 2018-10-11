<?php

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('techdays');
	}

	public function creerConference(){

		/*
		$data["numeroConf"]=$this->Model_newConf->getAllOffresByIdUser($_SESSION['idUser']);
		$this->load->model("modelUser");
		$data["titreConf"]=$this->Model_newConf->getUser($_SESSION['idUser']);
		$this->load->model("modelDemandes");
		$data["contenuConf"]=$this->Model_newConf->getAllDemandesByIdUser($_SESSION['idUser']);
		$this->load->model("modelDeals");
		$data["niveauConf"]=$this->modelDeals->getAllDealsByIdUser($_SESSION['idUser']);
		$data["themeConf"]=$this->modelDeals->getAllDealsByIdUser($_SESSION['idUser']);
		$this->load->view('newConference',$data);*/
		$this->load->model('Model_newConf');
		$data["numeroConf"]=$this->Model_newConf->nouvelleConf();
		$this->load->view('newConference',$data);
	}
}
?>
