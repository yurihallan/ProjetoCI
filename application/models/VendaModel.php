<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CursoModel extends CI_Model{

    function listar_professor(){
        return $this->db->query("
        SELECT 
            PROFESSOR.id_Professor, 
            PROFESSOR.Professor_Nome 
        FROM 
            escola_flexpeak.PROFESSOR       
        ");


    }


    function listar_professor_todos(){
         $this->db->select("*");
         return $this->db->get('PROFESSOR')->result();


    }


}