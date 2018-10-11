<?php 
    class Model_newConf extends CI_Model{
        function nouvelleConf(){
            $sql = $this->db->query("");
            return $sql->result();
        }
    }
?>