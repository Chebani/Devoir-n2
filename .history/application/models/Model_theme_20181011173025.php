<?php 
    class Model_theme extends CI_Model{
        function getAllNiveaux(){
            $sql = $this->db->query("select LIBELLETHEME FROM theme");
            return $sql->result();
        }
    }
?>