<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller{



	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('professor_view');
		$this->load->view('template/footer'); 

	}
}