<?php 
    class Model_niveau extends CI_Model{
        function nouvelleConf(){
            $sql = $this->db->query("select max(IDCONFERENCE) as 'idConf' FROM conference");
            return $sql->result();
        }
    }
?>