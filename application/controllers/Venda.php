<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venda extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->model('VendaModel');
		$this->load->database();
	}
	


	public function index()
	{

		$this->load->model('VendaModel','VENDA');

		$dados['valor'] = $this->VENDA->listar_venda_todos();
		
		$this->load->view('VendaDetail',$dados);
	}


    function Deletar(){
		$id = $_GET['id'];
  
		$dados['msgAlert'] = "";
		  
		$retun = $this->VendaModel->Deletar_Venda($id);
		  if (is_string($retun)) {
		   
			$dados['msgAlert'] = "  <div class='alert alert-danger' role='alert'>
			Registro possui dependentes. Não é Possivel excluir.  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button></div>";
			$dados['valor'] = $this->VendaModel->listar_venda_todos();
			 $this->load->view('VendaDetail',$dados);
		} else {
		  $dados['msgAlert'] = "  <div class='alert alert-success' role='alert'>
		  Venda Deletado com Sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  <span aria-hidden='true'>&times;</span>
		  </button></div>";
		  $dados['valor'] = $this->VendaModel->listar_venda_todos();
		  $this->load->view('VendaDetail',$dados);
		}
		  
	  }


	  function view_venda(){

		$dados['usuario'] = $this->VendaModel->listar_todos_usuarios();
		$dados['produtos'] = $this->VendaModel->listar_todos_produtos();

		
		$this->load->view('VendaCadastrar',$dados);
	  }

	  function Cadastrar(){
		
		$numero_Venda = $_POST['Numero_Venda'];
		$Vendendor_responsavel = $_POST['Vendendor_responsavel'];
		$Data = $_POST['Data_Venda'];
		$horario = $_POST['horario'];
		$idProduto = $_POST['Produto_Nome'];
		

		//concatenado data e horario em uma variavel
		 $DataVenda = $Data.' '.$horario;
		 
		 $vend_resp = explode("/", $Vendendor_responsavel);
		 $Nome_vend = $vend_resp[1];
		 $idUsuario = $vend_resp[0];
	

        $dados['msgAlert'] = "";
        
        $res = $this->VendaModel->inserirVenda($numero_Venda, $Nome_vend, $idUsuario ,$DataVenda,$idProduto);
		if(is_string($res)){
            $dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
			Erro na Cadastro.  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
			</button></div>";
			
			$dados['valor'] = $this->VendaModel->listar_venda_todos();
			$this->load->view('VendaDetail',$dados);
          }else{
			$dados['msgAlert'] = "  <div class='alert alert-success' role='alert'>
			Venda cadastrada com Sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button></div>";

			$dados['valor'] = $this->VendaModel->listar_venda_todos();
			$this->load->view('VendaDetail',$dados);
		}
		



	  }


	  function editar(){


		$id = $_GET['id'];
        
		$dados['valor'] = $this->VendaModel->listar_venda($id);
		$dados['usuario'] = $this->VendaModel->listar_todos_usuarios();
		$dados['produtos'] = $this->VendaModel->listar_todos_produtos();
		  
		$this->load->view('VendaAtualizar',$dados);


	  }


	  function update(){
		
		$id = $_POST['idvenda'];
		$numero_Venda = $_POST['Numero_Venda'];
		$Vendendor_responsavel = $_POST['Vendendor_responsavel'];
		$Data = $_POST['Data_Venda'];
		$horario = $_POST['horario'];
		$idProduto = $_POST['Produto_Nome'];
		

		//concatenado data e horario em uma variavel
		 $DataVenda = $Data.' '.$horario;
		 
		 $vend_resp = explode("/", $Vendendor_responsavel);
		 $Nome_vend = $vend_resp[1];
		 $idUsuario = $vend_resp[0];

		

		$dados['msgAlert'] = "";
		

        $data = array(  
			'Numero_Venda' => $numero_Venda,
			'Vendendor_responsavel' => $Nome_vend,
			'Id_Usuario' => $idUsuario,
			'Data_Venda' => $DataVenda,
			'Id_Produto' => $idProduto
			
	
			);
	
	
		  $retun = $this->VendaModel->Update_Venda($data,$id);
        
          if(is_string($retun)){
            $dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
			Erro na alteração.  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
			</button></div>";
			
			$dados['valor'] = $this->VendaModel->listar_venda_todos();
			$this->load->view('VendaDetail',$dados);
          }else{
			$dados['msgAlert'] = "  <div class='alert alert-success' role='alert'>
			Venda alterado com Sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button></div>";

			$dados['valor'] = $this->VendaModel->listar_venda_todos();
			$this->load->view('VendaDetail',$dados);
		}

		

	  }


}
