<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class VendaModel extends CI_Model{

    function listar_venda($id){
        $query = $this->db->query("
        SELECT `VENDA`.`idVENDA`,
            `VENDA`.`Numero_Venda`,
            `VENDA`.`Vendendor_responsavel`,
            DATE_FORMAT( `Data_Venda`, '%d/%m/%Y %T' ) AS Data_Venda,
            `VENDA`.`Id_Usuario`,
            `VENDA`.`Id_Produto`
        FROM `Mercado`.`VENDA`
        WHERE idVENDA = '$id'
        ")->result();

        return $query;
    }


    function listar_venda_todos(){
       $query =  $this->db->query("
        SELECT v.idVENDA,
         v.Numero_Venda,
         DATE_FORMAT( Data_Venda, '%d/%m/%Y %T' ) AS Data_Venda,
         v.Vendendor_responsavel,
         p.Produto_Nome,
         p.Produto_Preco
        FROM Mercado.VENDA v,
             Mercado.Produtos p
        WHERE v.Id_Produto = p.idProdutos")->result();
        return $query;


    }


    function Deletar_Venda($id){
        $this->db->where('idVENDA', $id);
        return $this->db->delete('VENDA');

    }



    function listar_todos_usuarios(){
        $this->db->select("*");
        return $this->db->get('USUARIOS')->result();

   }


   function listar_todos_produtos(){
    $this->db->select("*");
    return $this->db->get('Produtos')->result();

   }

   function inserirVenda($numero_Venda, $Nome_vend, $idUsuario,$DataVenda,$idProduto){
        
    return $this->db->query("
    

        INSERT INTO `Mercado`.`VENDA`
        (
        `Numero_Venda`,
        `Vendendor_responsavel`,
        `Data_Venda`,
        `Id_Usuario`,
        `Id_Produto`)
        VALUES
        (
            '$numero_Venda',
            '$Nome_vend',
        '$DataVenda',
        '$idUsuario',
        '$idProduto')

        ");

    } 


    function Update_Venda($data,$id){
        $this->db->where('idVENDA', $id);
        return $this->db->update('VENDA', $data);
    }



}