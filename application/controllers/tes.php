<?php

class Tes extends MY_Controller{
	public function __construct(){
    parent::__construct();
     $this->load->model('m_data');
	}

	public function index(){
		$id_user = $_SESSION['id_user'];

		echo $id_user;
	}
  
}

