<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form', 'functions', 'form_validation','url');
		$this->load->model('CursoModel');
		$this->load->database();
	}
	


	public function index()
	{

		$this->load->model('CursoModel','PROFESSOR');

		$dados['nomes'] = $this->PROFESSOR->listar_professor_todos();
		// $res = $this->CursoModel->listar_professor_todos();
		
		// $dados['nomes'] = $res->result('array') ? $res->result('array') : null;
		
		// foreach($dados as $nomes):

			// print_r ($dados);
		
		// endforeach;	
		// $tables = $this->db->list_tables();

		// foreach ($res->result() as $row)
		// {
		// 	$dados[] = $row->id_Professor.'-'.$row->Professor_Nome;
		// }

		// print_r($dados);
		$this->load->view('CursoView',$dados);
	}


}
