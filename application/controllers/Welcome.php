<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	}


	public function index()
	{
		// $this->load->view('template/header');
		$this->load->view('welcome_message');
		// $this->load->view('template/footer');
	}


	public function outro()
	{
		// $this->load->view('template/header');
		$this->load->view('professorView');
		// $this->load->view('template/footer'); 

	}
}
