<?php 
    class Model_niveau extends CI_Model{
        function getAllNiveaux(){
            $sql = $this->db->query("select NIVEAU FROM niveau");
            return $sql->result();
        }
    }
?>