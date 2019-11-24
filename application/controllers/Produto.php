<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller{
	
	function __construct(){
        parent::__construct();
		$this->load->helper('form', 'functions', 'form_validation','url');
		$this->load->model('ProdutoModel');
		$this->load->database();
		
	}


	public function index()
	{
        

      $dados['valor'] = $this->ProdutoModel->listar_todos_produtos();
          
  		$this->load->view('ProdutoDetail',$dados);
    }
    

    public function view_produto()
	{
		
		$this->load->view('ProdutoCadastrar');
	}
 
 
    /**
     * Recebe o CEP via post e retorna os dados
     * consultados via JSON
     */
    public function consulta(){
    
        $cep = $this->input->post('cep');

        $endereco = 'http://viacep.com.br/ws';
        $url = $this->endereco . '/' . $cep . '/json/';
        
        print_r($url);

        echo $this->curl->consulta($cep);
        
    }

    public function Cadastrar(){
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
      

        $dados['msgAlert'] = "";
        
        $res = $this->ProdutoModel->inserirProduto($nome, $preco);
          if($res){
            $dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
            Dados cadastrado com sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button></div>";
            // $dados['valor'] = $this->UsuarioModel->listar_todos_usuarios();
            $this->load->view('ProdutoDetail',$dados);    
          }else{
            $dados['msgAlert'] = "Erro ao salvar evento no banco de dados!";
            // $dados['valor'] = $this->UsuarioModel->listar_todos_usuarios();
            $this->load->view('ProdutoDetail',$dados);
          }

        
        


    }

    function editar(){
      $id = $_GET['id'];
        
      $dados['valor'] = $this->ProdutoModel->listar_produto($id);
      
        
      $this->load->view('ProdutoAtualizar',$dados);

    }


    function Deletar(){
      $id = $_GET['id'];

      $dados['msgAlert'] = "";
        
      $retun = $this->ProdutoModel->Deletar_Produto($id);
        if (is_string($retun)) {
         
          $dados['msgAlert'] = "  <div class='alert alert-danger' role='alert'>
          Registro possui dependentes. Não é Possivel excluir.  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button></div>";
          $dados['valor'] = $this->ProdutoModel->listar_todos_produtos();
           $this->load->view('ProdutoDetail',$dados);
      } else {
        $dados['msgAlert'] = "  <div class='alert alert-success' role='alert'>
        Produto Deletado com Sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button></div>";
        $dados['valor'] = $this->ProdutoModel->listar_todos_produtos();
        $this->load->view('ProdutoDetail',$dados);
      }
        
    }



    function Update(){
        $id = $_POST['id'];
        
        $nome = $_POST['Nome'];
        $preco = $_POST['Preco'];
        
      
        $dados['msgAlert'] = "";

      $retun = $this->ProdutoModel->Update_Produto($nome,$preco,$id);
      
        if (is_string($retun)) {
          $dados['msgAlert'] = "  <div class='alert alert-danger' role='alert'>
          Erro na alteração.   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button></div>";
          $dados['valor'] = $this->ProdutoModel->listar_todos_produtos();
           $this->load->view('ProdutoDetail',$dados);
      } else {
        $dados['msgAlert'] = "  <div class='alert alert-success' role='alert'>
        Produto alterado com Sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button></div>";
        $dados['valor'] = $this->ProdutoModel->listar_todos_produtos();
        $this->load->view('ProdutoDetail',$dados);
      }
    }

}
		
