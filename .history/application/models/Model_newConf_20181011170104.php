<?php 
    class Model_newConf extends CI_Model{
        function nouvelleConf(){
            $sql = $this->db->query("select max(IDCONFERENCE) as 'idConf' FROM conference");
            return $sql->result();
        }
    }
?>