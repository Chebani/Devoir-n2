<?php 
    class Model_techno extends CI_Model{
        function getAllTechnologies(){
            $sql = $this->db->query("select IDTECHNO, NOMTECHNO FROM technologie");
            return $sql->result();
        }
    }
?>