<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model{

      
    function inserirUsuario($nome, $senha,$email,$cep,$rua,$bairro){
        
        return $this->db->query("
                
        INSERT INTO `Mercado`.`USUARIOS`
        (`Usuario_Nome`,
        `Usuario_Senha`,
        `Usuario_Email`,
        `Usuario_Cep`,
        `Usuario_Rua`,
        `Usuario_Bairro`,
        `Usuario_Data_Criacao`)
        VALUES
        ('$nome',
        '$senha',
        '$email',
        '$cep',
        '$rua',
        '$bairro',
       sysdate())");

    }



    function listar_todos_usuarios(){
        $this->db->select("*");
        return $this->db->get('USUARIOS')->result();

   }


   function listar_usuario($id){
    
        $this->db->where('Id_Usuario', $id);
        return $this->db->get('USUARIOS')->result();

    }


    function Deletar_Usuario($id){
        $this->db->where('Id_Usuario', $id);
        return $this->db->delete('USUARIOS');

    }

    function Update_Usuario($data,$id){
        $this->db->where('Id_Usuario', $id);
        return $this->db->update('USUARIOS', $data);
    }


    function validacao($email,$senha){
        $query = $this->db->query("
        
                SELECT     
                u.`Usuario_Senha`,
                u.`Usuario_Email`
                
            FROM `Mercado`.`USUARIOS` u
            where u.Usuario_Email = '$email'
            and u.Usuario_Senha = '$senha';
        ");
        return $query;
    }



   
}