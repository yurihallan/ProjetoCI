<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdutoModel extends CI_Model{
    
    function inserirProduto($nome, $preco){
        
        return $this->db->query("
                
        INSERT INTO `Mercado`.`Produtos`
        (`Produto_Nome`,
        `Produto_Preco`,
        `Produto_Data_Criacao`,
        `Produto_Data_Alteracao`
        )
        VALUES
        ('$nome',
        '$preco',
        sysdate(),
       sysdate())");

    }



    function listar_todos_produtos(){
        $this->db->select("*");
        return $this->db->get('Produtos')->result();

   }


   function listar_produto($id){
    
        $this->db->where('idProdutos', $id);
        return $this->db->get('Produtos')->result();

    }


    function Deletar_Produto($id){
        $this->db->where('idProdutos', $id);
        return $this->db->delete('Produtos');

    }

    function Update_Produto($nome,$preco,$id){
        $query = $this->db->query("
        
            UPDATE `Mercado`.`Produtos`
            SET

            `Produto_Nome` = '$nome',
            `Produto_Preco` = '$preco',

            `Produto_Data_Alteracao` = sysdate()
            WHERE `idProdutos` = '$id';
        ");
        return $query;
    }




}