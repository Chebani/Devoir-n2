<?php 
    class Model_theme extends CI_Model{
        function getAllTheme(){
            $sql = $this->db->query("select LIBELLETHEME FROM theme");
            return $sql->result();
        }
    }
?>