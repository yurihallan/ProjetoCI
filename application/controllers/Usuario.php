<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct(){
    parent::__construct();
		
		$this->load->model('UsuarioModel');
		$this->load->database();
		
	}


	public function index()
	{
        

      $dados['valor'] = $this->UsuarioModel->listar_todos_usuarios();
          
  		$this->load->view('UsuarioDetail',$dados);
    }
    

    public function view_cadastrar()
	{
		
		$this->load->view('UsuarioCadastrar');
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

      
        $nome = $_POST['Nome'];
        $email = $_POST['Email'];
        $senha = $_POST['Senha'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua_usuario'];
        $bairro = $_POST['bairro_usuario'];


        $dados['msgAlert'] = "";
        
        $res = $this->UsuarioModel->inserirUsuario($nome, $senha,$email,$cep,$rua,$bairro);
          if(is_string($res)){
            $dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
            Erro no Cadastro.  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
            </button></div>";
            $dados['valor'] = $this->UsuarioModel->listar_todos_usuarios();
            $this->load->view('UsuarioDetail',$dados);    
          }else{
            $dados['msgAlert'] = "  <div class='alert alert-success' role='alert'>
            Usuario cadastrada com Sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button></div>";
            $dados['valor'] = $this->UsuarioModel->listar_todos_usuarios();
            $this->load->view('UsuarioDetail',$dados);
          }

        
        


    }

    function editar(){
      $id = $_GET['id'];
        
      $dados['valor'] = $this->UsuarioModel->listar_usuario($id);
      
        
      $this->load->view('UsuarioAtualizar',$dados);

    }


    function Deletar(){

      $id = $_GET['id'];
      $dados['msgAlert'] = "";
        
      $retun = $this->UsuarioModel->Deletar_Usuario($id);

        if (isset($retun)) {
         
          $dados['msgAlert'] = "  <div class='alert alert-danger' role='alert'>
          Registro possui dependentes. Não é Possivel excluir.  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button></div>";
          $dados['valor'] = $this->UsuarioModel->listar_todos_usuarios();
          $this->load->view('UsuarioDetail',$dados);
        } else {
          $dados['msgAlert'] = "  <div class='alert alert-success' role='alert'>
          Usuario Deletado com Sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button></div>";
          $dados['valor'] = $this->UsuarioModel->listar_todos_usuarios();
          $this->load->view('UsuarioDetail',$dados);
        }
        
    }



    function Update(){
        $id = $_POST['id'];
        
        $nome = $_POST['Nome'];
        $email = $_POST['Email'];
        $senha = $_POST['Senha'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua_usuario'];
        $bairro = $_POST['bairro_usuario'];
        
   
      
        $dados['msgAlert'] = "";
        

        $data = array(  
        'Usuario_Nome' => $nome,
        'Usuario_Email' => $email,
        'Usuario_Senha' => $senha,
        'Usuario_Cep' => $cep,
        'Usuario_Rua' => $rua,
        'Usuario_Bairro' => $bairro

        );


      $retun = $this->UsuarioModel->Update_Usuario($data,$id);
      
        if (is_string($retun)) {
          $dados['msgAlert'] = "  <div class='alert alert-danger' role='alert'>
          Erro na alteração.   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button></div>";
          $dados['valor'] = $this->UsuarioModel->listar_todos_usuarios();
           $this->load->view('UsuarioDetail',$dados);
      } else {
        $dados['msgAlert'] = "  <div class='alert alert-success' role='alert'>
        Usuario alterado com Sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button></div>";
        $dados['valor'] = $this->UsuarioModel->listar_todos_usuarios();
        $this->load->view('UsuarioDetail',$dados);
      }
    }

}
		
